CSS ?= ./css/nginz.css
CSS_MIN ?= ./css/nginz.min.css
LESS ?= ./less/nginz.less
CHECK=\033[32m✔ Done\033[39m
HR=\033[37m--------------------------------------------------\033[39m

# Depends on Recess.
#
#   $ npm install -g recess
#

#
# LESS COMPILE
#

build:
	@echo "\n\033[37mBuilding nginZ...\033[39m"
	@echo "${HR}"
	@printf "Compiling and minifying LESS..."
	@recess --compile ${LESS} > ${CSS}
	@recess --compress ${LESS} > ${CSS_MIN}
	@echo "             ${CHECK}"
	@echo "${HR}"
	@echo "\033[36mComplete!\n\033[39m"
	@echo "\033[37mThanks for using nginZ,"
	@echo "<3 @ZDroid\n\033[39m"

#
# REMOVE PRIOR BUILDS
#

clean:
	rm ./css/nginz.*
