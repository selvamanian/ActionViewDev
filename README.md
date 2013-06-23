# ActionViewDev

### Installation

Pull the repo and install as per YiiBoilerplate instructions:
* Create database
* Add db details to common > config > params-local.php OR from the common > config > environments > [ either of the files here depending on what you need or copy the template to create one for staging, etc ]
* Remove comments from db connections in console > config > main.php
* Remove comments from db connections in frontend > config > main.php - if you're using the frontend
* $ ./runpostdeploy local no-migrate
* $ ./yiic migrate 
* import sql from common / data