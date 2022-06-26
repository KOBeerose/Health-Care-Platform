# Health-Care-Platform
Health Care Platform is project aiming to provide an online health-care system using machine learning.

Based on the NHANES dataset we are going to create a ML model that predict if the client will eventually:

* Risk Having Diabetes.
* Will likely experience a stroke.




# Run this project
## Sign up for Heroku

Heroku, being a Software as a Service (SaaS)-type of service, requires you to create an account and login before you can start using its computers. Don't worry, creating an account and running a simple app is free and doesn't require a credit card.

You can create an account at this URL: [https://signup.heroku.com/dc](https://signup.heroku.com/dc)

## Download the Heroku toolbelt

Heroku has a command-line "toolbelt" that we must download and install in order commands that will simplify our communication with the Heroku servers. The toolbelt can be downloaded at: [https://toolbelt.heroku.com/](https://toolbelt.heroku.com/)

## Authenticate with Heroku with `heroku login`

Installing the Heroku toolbelt will give you access to the `heroku` command which has several subcommands for interacting with the Heroku service. 

The first command you need to run is `heroku login`, which will ask you to enter your login credentials so that every subsequent `heroku` command knows who you are:

(You will only have to do this __once__)

~~~sh
$ heroku login
~~~





# Let's create a Flask app

## Creating a Flask app form scratch

Create a basic Flask app of any kind, i.e. one that consists of just __app.py__. You can revisit the [lessons here](http://www.compjour.org/lessons/flask-single-page/hello-tiny-flask-app/) or the sample repo at: [https://github.com/datademofun/heroku-basic-flask](https://github.com/datademofun/heroku-basic-flask)

Heck, try to write it out by memory if you can -- below, I've made the app output simple HTML that includes the current time and a placeholder image from the [loremflickr.com](http://loremflickr.com/) service:

~~~py
from flask import Flask
from datetime import datetime
app = Flask(__name__)

@app.route('/')
def homepage():
    the_time = datetime.now().strftime("%A, %d %b %Y %l:%M %p")

    return """
    <h1>Hello heroku</h1>
    <p>It is currently {time}.</p>

    <img src="http://loremflickr.com/600/400">
    """.format(time=the_time)

if __name__ == '__main__':
    app.run(debug=True, use_reloader=True)
~~~

You should be able to run this app on your own system via the familiar invocation and visiting [http://localhost:5000](http://localhost:5000):

~~~sh
$ python app.py
~~~


## Fork your Repository

You should **fork your repository** and then **clone it** so you can manage your own repo and use this only as a template.

```
$ git clone https://github.com/your_username/flask-heroku-example.git
```

At this point you should be able to modify the Flask app `app.py`:
```python
"""Flask App Project."""

from flask import Flask, jsonify
app = Flask(__name__)


@app.route('/')
def index():
    """Return homepage."""
    json_data = {'Hello': 'World!'}
    return jsonify(json_data)


if __name__ == '__main__':
    app.run()
```

**WARNING:** If you change the file name (`app.py`) and the Flask **app** (`app = Flask(__name__)`) then remember to change Heroku's Procfile:
```
web: gunicorn <filename>:<app_name>
```

## Create Your Heroku App

You can also leave `your_app_name` empty if you want Heroku to create a randomized name.

```
$ heroku create your_app_name
Creating app... done, ⬢ your_app_name
https://your_app_name.herokuapp.com/ | https://git.heroku.com/your_app_name.git
```

## Deploy Your Project

Your project is going to be deploy using **gunicorn** as a web server using the **Procfile** and it will be detected as a Python project since it is declared in **runtime.txt**

* **Add necessary files and commit them**
```bash
$ git add -A
$ git commit -am "finished flask project"
```

* **Push to Heroku**
```bash
$ git push heroku master
-- SNIP --
remote: -----> Python app detected
remote: -----> Installing python-3.6.5
remote: -----> Installing pip
remote: -----> Installing dependencies with Pipenv 11.8.2…
remote:        Installing dependencies from Pipfile.lock (59a99c)…
remote: -----> Discovering process types
remote:        Procfile declares types -> web
remote:
remote: -----> Compressing...
remote:        Done: 53.9M
remote: -----> Launching...
remote:        Released v3
remote:        https://your_app_name.herokuapp.com/ deployed to Heroku
remote:
remote: Verifying deploy... done.
To https://git.heroku.com/your_app_name.git
 * [new branch]      master -> master
```

That's it, you can visit your app now with `heroku open`.








