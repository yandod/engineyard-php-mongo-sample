How to use:
-----

* install gem engineyard (using rvm or rbenv is better)
  * gem install engineyard 
* create new application with this source code
  * repo
  * webroot:  public/
* create new environment with or without database 
* add 3 utility instance with setting bellow
  * give a name for replica, for example, hoge 
  * name: mongodb_replhoge_1
  * name: mongodb_replhoge_2
  * name: mongodb_replhoge_3
* clone customzied chef recipe into your local machine
  * git clone git://github.com/yandod/ey-cloud-recipes-mongo.git
* cd into cloned repo
  * cd ey-cloud-recipes-mongo 
* upload custom recipe to your environment
  * ey recipes upload -e={your_environment_name}
* apply recipe to your environment
  * ey recipes apply -e={your_environment_name} 
