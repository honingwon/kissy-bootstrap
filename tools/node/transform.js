var path = require('path'),
	fs = require('fs'),
	http = require('http'),
	url = require('url');
var serverUrl = '',	//服务器地址，用来请求php（默认）文件
	urlObj = null,
	urlOption = {}, //服务器地址格式化
	srcPath = '',		//源文件所在的目录，默认为当前路径
	fileType = '.php',//源文件类型，默认为php
	toType = '.html',//生成文件的类型，默认为html
	toPath = '',//生成文件所在的目录
	isHelp = false;//是否键入help 命令，如果键入help 命令显示帮助信息

process.argv.forEach(function (val, index, array) {
	var nextVal = array[index + 1];

	switch(val){
		case '-server' :
			serverUrl = nextVal;
			break;
		case '-path' :
			srcPath = nextVal;
			break;
		case '-type' :
			fileType = nextVal;
			break;
		case '-to'	:
			toPath = nextVal;
			break;
		case '-help' : 
			isHelp = true;
			break;
	}
});
//显示帮助信息
if(isHelp){
	console.log('-server : 服务器地址，用来请求生成好的文件，用来转换成html文件');
	console.log('-path : 源文件所在的目录，默认为当前路径');
	console.log('-type : 源文件类型，默认为php');
	console.log('-to : 生成文件所在的目录，默认为当前路径');
	console.log('-help : 帮助命令');
	process.exit();
}
//检查参数配置
if(!serverUrl){
	console.log('请使用配置项 -server,配置服务器地址！');
	process.exit();
}
console.log(serverUrl);
urlObj = url.parse(serverUrl);
urlOption = {
	host : urlObj.hostname,
	port : urlObj.port,
	path : urlObj.path
};
srcPath = path.normalize(srcPath);
toPath = path.normalize(toPath);
//检测源文件路径是否存在
path.exists(srcPath,function(exists){
	if(!exists){
		console.log('源文件路径配置不正确：' + srcPath);
		process.exit();
	}

	//检测生成文件的路径
	path.exists(toPath,function(exists){
		if(!exists){
			console.log('创建目录：' + toPath);
			fs.mkdirSync(toPath);
		}
		transDir(srcPath,toPath);
	});
});


function transDir(srcPath,toPath){
	console.log('start transfer files...');
	var files = fs.readdirSync(srcPath),
		file = null,
		filePath = null;
	//遍历文件夹下的子文件
	for(var i = 0; i < files.length; i++){
		fileName = files[i];
		filePath = path.join(srcPath,fileName);
		//如果是文件则转换文件
		if(fs.statSync(filePath).isFile()){
			transFile(fileName,filePath,toPath);
		}
	}
	console.log('end transfer files...');
}

function transFile(fileName,filePath,toPath){
	var fileUrl = serverUrl + fileName,
		toFilePath = path.join(toPath,fileName).replace(fileType,toType);

	urlOption.path = url.parse(fileUrl).path;
	console.log(fileUrl);
	var writeStream = fs.createWriteStream(toFilePath);
	//fs.open(, 'w', function(error,fd){

	var req = http.get(urlOption, function(res) {
		res.setEncoding('utf8');
		
		res.on('data', function (chunk) {
			writeStream.write(chunk);
		});
		res.on('end',function(){

			writeStream.end();
		});
		/**/
	});

	req.on('error', function(e) {
		console.log('problem with request: ' + e.message);
		writeStream.end();
	});
	//})
	writeStream.on('end',function(){
		writeStream.destroySoon();
	});
}

function change(fileName,chunk){
	
}



