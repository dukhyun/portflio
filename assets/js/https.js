if (documnet.location.host !== 'localhost' || documnet.location.host !== 'pf.dukhyun') {
	if (document.location.protocol == 'http:') {
		document.location.href = document.location.href.replace('http:', 'https:');
	}
}