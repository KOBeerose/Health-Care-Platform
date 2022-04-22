# -*- codin: utf-8 -*-

import numpy as np

from flask_cors import CORS, cross_origin
from flask import Flask, request, jsonify
import os
import traceback

from flask import Flask, request, jsonify
import pandas as pd
from sklearn.externals import joblib
os.environ['TF_CPP_MIN_LOG_LEVEL'] = '2'



LR = joblib.load("../ML Deployement/Models/LR.sav")
RF_CLF = joblib.load("../ML Deployement/Models/RF_CLF.sav")
SVM_CLF = joblib.load("../ML Deployement/Models/SVM_CLF.sav")

models_dict = {"LR":LR, "RF_CLF":RF_CLF, "SVM_CLF":SVM_CLF}

app = Flask(__name__)
app.config['SECRET_KEY'] = 'the quick brown fox jumps over the lazy dog'
app.config['CORS_HEADERS'] = 'Content-Type'

cors = CORS(app, resources={
            r"/predict": {"origins": "http://localhost:3000"}})


@app.route("/predict", methods=["GET", "POST"])
@cross_origin(origin='localhost', headers=['Content-Type', 'Authorization'])
def predict():
    get_res = {
        "data": "API IS WORKING (the is the result of a GET request to /predict)"}
    if request.method == "GET":
        return get_res

    if request.method == "POST":
        model = request.json['model']
        if model == "":
            return jsonify({"error": "no model specified"})
        clf = models_dict["model"]

    clf = joblib.load(model_file_name)
    print('model loaded')

    if clf:
        try:
            json_ = request.json
            query = pd.get_dummies(pd.DataFrame(json_))

            query = query.reindex(columns=model_columns, fill_value=0)

            prediction = list(clf.predict(query))

            # Converting to int from int64
            return jsonify({"prediction": list(map(int, prediction))})

        except Exception as e:

            return jsonify({'error': str(e), 'trace': traceback.format_exc()})
    else:
        print('train first')
        return 'no model here'


    
if __name__ == "__main__":
    app.run(debug=True)