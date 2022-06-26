from flask import Flask, render_template, request
import pandas as pd
import joblib


app = Flask(__name__)



@app.route('/predict', methods=['GET','POST'])

def predict():
    
    if request.method == "POST":
        return "this is a post request"
    if request.method == "GET":
        return "this is a get request"


def preprocessDataAndPredict(feature_dict):
    
    test_data = {k:[v] for k,v in feature_dict.items()}  
    print(test_data)
    test_data = pd.DataFrame(test_data)

    file = open("mlp.pkl","rb")
    
     #load trained model
    trained_model = joblib.load(file)
    
    predict = trained_model.predict(test_data)
    print(predict)
    return predict
    
    pass
if __name__ == '__main__':
    app.run(debug=True)