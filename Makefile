DPL_CSS = ./docs/assets/css/dpl.css
DPL_LESS = ./less/dpl.less

#
# Clean
#
clean:
	rm -rf docs/assets/
	rm -rf docs/components/
	rm -rf docs/templates/
	
#
# BUILD DOCS
#
dpl:	clean
	mkdir -p docs/assets/css
	mkdir -p docs/assets/img
	mkdir -p docs/assets/js
	mkdir -p docs/assets/js/bootstrap
	mkdir -p docs/components
	mkdir -p docs/templates
	lessc ${DPL_LESS} > ${DPL_CSS}
	cp pages/assets/css/* docs/assets/css/
	cp pages/assets/img/* docs/assets/img/
	copy pages/assets/js/* docs/assets/js/
	copy pages/assets/js/bootstrap/* docs/assets/js/bootstrap/
	cp pages/*.php	docs/
	cp pages/components/*.php docs/components/
	cp pages/templates/*.php docs/templates/

