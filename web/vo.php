<!DOCTYPE html>
<html>
<head>
	<style>
.speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
.speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
.speech img {float: right; width: 40px }
</style>
<script>
function startDictation() {
if (window.hasOwnProperty(‘webkitSpeechRecognition’)) {
var recognition = new webkitSpeechRecognition();

recognition.continuous = false;
recognition.interimResults = false;

recognition.lang = “en-US”;
recognition.start();

recognition.onresult = function(e) {
document.getElementById(‘transcript’).value
= e.results[0][0].transcript;
recognition.stop();
document.getElementById(‘searchBox’).submit();
};

recognition.onerror = function(e) {
recognition.stop();
}

}
}
</script>
</head>
<body>
<form id=”searchBox” method=”get” action=”httpss://www.techmuzz.com”>
<div class=”speech”>
<input type=”text” name=”s” id=”transcript” placeholder=”Speak” />
<img onclick=”startDictation()” src=”https://i.imgur.com/cHidSVu.gif” />
</div>
</form>
</body>
</html>