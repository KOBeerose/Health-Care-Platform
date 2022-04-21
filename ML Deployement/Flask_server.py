# -*- codin: utf-8 -*-

import numpy as np

from flask_cors import CORS, cross_origin
from flask import Flask, request, jsonify
from collections import Counter
import socket
import re
import os
os.environ['TF_CPP_MIN_LOG_LEVEL'] = '2'

models_list = ["LR", "RF_CLF", "SVM_CLF"]


def predict(user):
    return 0


app = Flask(__name__)
app.config['SECRET_KEY'] = 'the quick brown fox jumps over the lazy dog'
app.config['CORS_HEADERS'] = 'Content-Type'

cors = CORS(app, resources={
            r"/recordsigns": {"origins": "http://localhost:3000"}})


@app.route("/firebase", methods=["GET", "POST"])
@cross_origin(origin='localhost', headers=['Content-Type', 'Authorization'])
def firebase():
    get_res = {
        "data": "API IS WORKING (the is the result of a GET request to /firebase)"}
    if request.method == "POST":
        status = request.json['status']
        if status == "":
            return jsonify({"error": "no user dirctory"})
        try:
            res = send(status)
            if status == "stop":
                print("hi am here")
                predict("1")
                print("done")
        except Exception as e:
            return jsonify({"error": str(e)})

    return get_res


if __name__ == "__main__":
    app.run(debug=True)