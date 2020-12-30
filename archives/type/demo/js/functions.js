/*
*************************************************

J A S O N  S A N T A  M A R I A
JavaScript Functions

*************************************************
*/

/*
	Live Preview
*/

var defaultAuthorText = 'Who says:';
var defaultCommentText = 'Your comment&#8230;';


function livePreview(){
	
	if(!document.getElementById || !document.createElement || !document.getElementsByTagName) { return; }
	
	if(document.getElementById('comment_form') && document.getElementById('comments') && document.getElementById('comment') && document.getElementById('url') && document.getElementById('name')){
		var comment_form = document.getElementById('comment_form');
		var comments = document.getElementById('comments');
		var comment = document.getElementById('comment');
		var authorName = document.getElementById('name');
		var url = document.getElementById('url');
	}else{
		return;
	}
	
	
	var preview = document.createElement('div');
	preview.setAttribute('id', 'comm-preview');
	
	var previewHeader = document.createElement('h3');
	previewHeader.setAttribute('id', 'comm-preview-head');
	previewHeader.innerHTML = 'Comment Preview';
	preview.appendChild(previewHeader);
	
	var previewContents = document.createElement('div');
	previewContents.setAttribute('id', 'preview-contents');
	preview.appendChild(previewContents);
	
	// initial preview conditions	
	if(authorName.value == ''){ // no author
		previewContents.innerHTML = '<dl><dt>' + defaultAuthorText + '</dt><dd id="preview-text"><p>' + defaultCommentText + '</p></dd></dl>';		
	}else{
		if(url.value == ''){ // author but no url
			previewContents.innerHTML = '<dl><dt>' + authorName.value + ' says:</dt><dd id="preview-text"><p>' + defaultCommentText + '</p></dd></dl>';		
		}else{ // author + url
			previewContents.innerHTML = '<dl><dt><a href="' + url.value + '">' + authorName.value + '</a> says:</dt><dd id="preview-text"><p>' + defaultCommentText + '</p></dd></dl>';	
		}
	}		
	
	document.getElementById('post-comm').appendChild(preview);
	
	authorName.onkeyup = url.onkeyup = comment.onkeyup = function(){
		reloadPreviewDiv();
	}
	
}

function reloadPreviewDiv(){
	
	if(document.getElementById('comment').value == ''){
		if(document.getElementById('name').value == ''){ // no author, no comment
			document.getElementById('preview-contents').innerHTML = '<dl><dt>' + defaultAuthorText + '</dt><dd id="preview-text"><p>' + defaultCommentText + '</p></dd></dl>';		
		}else{
			if(document.getElementById('url').value == ''){ // author but no url and no comment
				document.getElementById('preview-contents').innerHTML = '<dl><dt>' + document.getElementById('name').value + ' says:</dt><dd id="preview-text"><p>' + defaultCommentText + '</p></dd></dl>';		
			}else{ // author + url but no comment
				document.getElementById('preview-contents').innerHTML = '<dl><dt><a href="' + formatURL(document.getElementById('url').value) + '">' + document.getElementById('name').value + '</a> says:</dt><dd id="preview-text"><p>' + defaultCommentText + '</p></dd></dl>';	
			}
		}
	}else{
		if(document.getElementById('name').value == ''){ // no author, no url, but comment
			document.getElementById('preview-contents').innerHTML = '<dl><dt>' + defaultAuthorText + '</dt><dd id="preview-text">' + superTextile(document.getElementById('comment').value) + '</dd></dl>';		
		}else{
			if(document.getElementById('url').value == ''){ // author but no url
				document.getElementById('preview-contents').innerHTML = '<dl><dt>' + document.getElementById('name').value + ' says:</dt><dd id="preview-text">' + superTextile(document.getElementById('comment').value) + '</dd></dl>';		
			}else{ // author + url + comment
				document.getElementById('preview-contents').innerHTML = '<dl><dt><a href="' + formatURL(document.getElementById('url').value) + '">' + document.getElementById('name').value + '</a> says:</dt><dd id="preview-text">' + superTextile(document.getElementById('comment').value) + '</dd></dl>';	
			}
		}
	}
	
}

function formatURL(url){
	if(url.indexOf('http://') == -1){
		return "http://" + url;
	}else{
		return url;
	}
}

addLoadEvent(livePreview);


/* ================  / BLOG PAGE ======================================================================== */

/*-------------------------------------------    
    Borrowed Functions
-------------------------------------------*/
/*

	addLoadEvent
	by Simon Willison
	http://simonwillison.net/2004/May/26/addLoadEvent/

*/

function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}


/*

	superTextile
	by Jeff Minard
	http://jrm.cc/extras/live-textile-preview.php

*/

function superTextile(s) {
    var r = s;
    // quick tags first
    qtags = [['\\*', 'strong'],
             ['\\?\\?', 'cite'],
             ['\\+', 'ins'],  //fixed
             ['~', 'sub'],   
             ['\\^', 'sup'], // me
             ['@', 'code']];
    for (var i=0;i<qtags.length;i++) {
        ttag = qtags[i][0]; htag = qtags[i][1];
        re = new RegExp(ttag+'\\b(.+?)\\b'+ttag,'g');
        r = r.replace(re,'<'+htag+'>'+'$1'+'</'+htag+'>');
    }
    // underscores count as part of a word, so do them separately
    re = new RegExp('\\b_(.+?)_\\b','g');
    r = r.replace(re,'<em>$1</em>');
	
	//jeff: so do dashes
    re = new RegExp('[\s\n]-(.+?)-[\s\n]','g');
    r = r.replace(re,'<del>$1</del>');

    // links
    re = new RegExp('"\\b(.+?)\\(\\b(.+?)\\b\\)":([^\\s]+)','g');
    r = r.replace(re,'<a href="$3" title="$2">$1</a>');
    re = new RegExp('"\\b(.+?)\\b":([^\\s]+)','g');
    r = r.replace(re,'<a href="$2">$1</a>');

    // images
    re = new RegExp('!\\b(.+?)\\(\\b(.+?)\\b\\)!','g');
    r = r.replace(re,'<img src="$1" alt="$2">');
    re = new RegExp('!\\b(.+?)\\b!','g');
    r = r.replace(re,'<img src="$1">');
    
    // block level formatting
	
		// Jeff's hack to show single line breaks as they should.
		// insert breaks - but you get some....stupid ones
	    re = new RegExp('(.*)\n([^#\*\n].*)','g');
	    r = r.replace(re,'$1<br />$2');
		// remove the stupid breaks.
	    re = new RegExp('\n<br />','g');
	    r = r.replace(re,'\n');
	
    lines = r.split('\n');
    nr = '';
    for (var i=0;i<lines.length;i++) {
        line = lines[i].replace(/\s*$/,'');
        changed = 0;
        if (line.search(/^\s*bq\.\s+/) != -1) { 
			line = line.replace(/^\s*bq\.\s+/,'\t<blockquote>')+'</blockquote>'; 
			changed = 1; 
		}
		
		// jeff adds h#.
        if (line.search(/^\s*h[1|2|3|4|5|6]\.\s+/) != -1) { 
	    	re = new RegExp('h([1|2|3|4|5|6])\.(.+)','g');
	    	line = line.replace(re,'<h$1>$2</h$1>');
			changed = 1; 
		}
		
		if (line.search(/^\s*\*\s+/) != -1) { line = line.replace(/^\s*\*\s+/,'\t<liu>') + '</liu>'; changed = 1; } // * for bullet list; make up an liu tag to be fixed later
        if (line.search(/^\s*#\s+/) != -1) { line = line.replace(/^\s*#\s+/,'\t<lio>') + '</lio>'; changed = 1; } // # for numeric list; make up an lio tag to be fixed later
        if (!changed && (line.replace(/\s/g,'').length > 0)) line = '<p>'+line+'</p>';
        lines[i] = line + '\n';
    }
	
    // Second pass to do lists
    inlist = 0; 
	listtype = '';
    for (var i=0;i<lines.length;i++) {
        line = lines[i];
        if (inlist && listtype == 'ul' && !line.match(/^\t<liu/)) { line = '</ul>\n' + line; inlist = 0; }
        if (inlist && listtype == 'ol' && !line.match(/^\t<lio/)) { line = '</ol>\n' + line; inlist = 0; }
        if (!inlist && line.match(/^\t<liu/)) { line = '<ul>' + line; inlist = 1; listtype = 'ul'; }
        if (!inlist && line.match(/^\t<lio/)) { line = '<ol>' + line; inlist = 1; listtype = 'ol'; }
        lines[i] = line;
    }

    r = lines.join('\n');
	// jeff added : will correctly replace <li(o|u)> AND </li(o|u)>
    r = r.replace(/li[o|u]>/g,'li>');

    return r;
}