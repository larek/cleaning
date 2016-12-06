<?
$this->title = "Upload";
$this->registerJsFile("http://hayageek.github.io/jQuery-Upload-File/4.0.8/jquery.uploadfile.min.js",['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerCssFile("http://hayageek.github.io/jQuery-Upload-File/4.0.8/uploadfile.css");
$this->registerJs('
$(document).ready(function()
{
	$("#fileuploader").uploadFile({
	url:"uploader?id='.$id.'",
	fileName:"myfile",
	maxFileSize: 20000000,
	showFileCounter: false,
	showStatusAfterSuccess: false,
	onSuccess:function(files,data,xhr,pd)
        {

	        console.log(data);
	        $(".file").append("<img src=\"/uploads/100x100/"+$.parseJSON(xhr.responseText)+"\">");

        }
	});
});');

?>

<div id="fileuploader">Upload</div>
<div class='file'></div>
