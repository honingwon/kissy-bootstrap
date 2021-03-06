set BOOTSTRAP_DPL=docs\assets\css\dpl.css
set BOOTSTRAP_DPL_LESS=less\dpl.less
set TOOLS_LESS_DIR=tools\less\
set TOOLS_NODE_DIR=tools\node\

::
:: Clean
::

	rmdir  docs\assets /S /Q
	rmdir  docs\components /S /Q
	rmdir  docs\templates /S /Q
	rmdir  docs\plug-in /S /Q
	rmdir  docs\bussiness /S /Q
	
::
:: BUILD DOCS
::
	echo 开始生成css
	mkdir  docs\assets\css
	mkdir  docs\assets\img
	mkdir  docs\assets\js
	mkdir  docs\assets\js\bootstrap
	mkdir  docs\components
	mkdir  docs\templates
	mkdir  docs\plug-in
	mkdir  docs\bussiness
	node %TOOLS_LESS_DIR%bin\lessc %BOOTSTRAP_DPL_LESS% > %BOOTSTRAP_DPL%
	copy pages\assets\css\* docs\assets\css\
	copy pages\assets\img\* docs\assets\img\
	copy pages\assets\js\* docs\assets\js\
	copy pages\assets\js\bootstrap\* docs\assets\js\bootstrap\
	copy pages\*.php	docs\
	copy pages\components\*.php docs\components\
	copy pages\templates\*.php docs\templates\
	copy pages\plug-in\*.* docs\plug-in\
	copy pages\bussiness\*.php docs\bussiness\
	::node %TOOLS_NODE_DIR%transform -server %SERVER_URL% -path docs\ -to docs\
	::配置文件的路径相对于 %TOOLS_NODE_DIR%transform.js的路径
	node %TOOLS_NODE_DIR%transform -cf ../../config.js
	echo 生成结束
	pause
