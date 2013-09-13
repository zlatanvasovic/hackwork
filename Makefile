LESS ?= ./less/nginz.less
CSS ?= ./css/nginz.css
CSS_MIN ?= ./css/nginz.min.css
CHECK=\033[32m✔ Done\033[39m

# Depends on `recess` npm module.

#
# LESS COMPILE
#

build:
	@printf "\nCompiling and minifying LESS...\n"
	@recess --compile ${LESS} > ${CSS}
	@recess --compress ${LESS} > ${CSS_MIN}
	@echo "\033[32m✔ Done\033[39m\n"
	@echo "\033[37mThanks for using nginZ,"
	@echo "made by @ZDroid\n\033[39m"

#
# REMOVE PRIOR BUILDS
#

clean:
	rm ./css/nginz.*