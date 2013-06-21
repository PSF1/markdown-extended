<!--//
/**
 * Markdown syntax reminders (for PHP Markdown Extended class)
 *
 * This document is a standalone HTML page presenting a complete review of the Markdown syntax
 * used with the **PHP Markdown Extended** version (*PHP class*).
 *
 * Alternatly, you can embed this content in an existing HTML page. It's been built to be
 * independant from its context (some CSS exceptions may happend).
 *
 * To open this document as a helper in a new browser window, you can use:
 *
 *    <script type="text/javascript">
 *    var mdereminders_window; // use this variable to interact with the cheat sheet window
 *    function mdereminders_popup(url){
 *    	if (!url) url='markdown_reminders.html?popup';
 *    	if (url.lastIndexOf("popup")==-1) url += (url.lastIndexOf("?")!=-1) ? '&popup' : '?popup';
 *    	mdereminders_window = window.open(url, 'markdown_reminders', 
 *           'directories=0,menubar=0,status=0,location=1,scrollbars=1,resizable=1,fullscreen=0,width=840,height=380,left=120,top=120');
 *    	mdereminders_window.focus();
 *    	return false; 
 *    }
 *    </script>
 *    <a href="markdown_reminders.html" onclick="return mdereminders_popup();" title="Markdown syntax reminders (new floated window)" target="_blank">
 *        Markdown syntax reminders</a> 
 *
 * You can add arguments when constructing the Javascript handler object for two special features:
 * -   `?popup`: a closer link will be add,
 * -   `?plaintext`: content will be written as plain text (no hidden content).
 *
 * To do so, you can pass a GET argument in the URL if it is a popup, or define a `MDEremindersInit` variable.
 *
 *     var MDEremindersInit='plaintext';
 *
 * This tool was largely inspired by GitHub's wiki editor (sic).
 *
 * @author      Pierre Cassat - Les Ateliers Pierrot <http://www.ateliers-pierrot.net/>
 * @see         Markdown, written by John Gruber <http://daringfireball.net/>
 * @see         Markdown Extra, written by Michel Fortin <http://michelf.com/>
 * @see         (peg) MultiMarkdown, written by Fletcher Penney <http://fletcherpenney.net/>
 * @see         PHP Markdown Extended, written by Pierre Cassat <http://www.ateliers-pierrot.net/>
 */
//-->
<style type="text/css">
<!--//
#mdereminders         { display: block; position: relative; margin: 0px; padding: 0px; }
#mdereminders_wrapper { 
  display: block; position: relative; margin: 10px; padding: 8px 12px; width: 784px; height: 324px;
  font: 13px/1.4em Helvetica, Arial, freesans, sans-serif !important; color: #404040;
  background-color: #f9f9f9; border: 1px solid #EEEEEE; line-height: 1.4em;
  -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; }
#mdereminders_wrapper, #mdereminders_wrapper li, #mdereminders_wrapper a,
#mdereminders_wrapper th, #mdereminders_wrapper td, #mdereminders_wrapper p { 
  font: 13px/1.4em Helvetica, Arial, freesans, sans-serif; color: #404040; }
#mdereminders_wrapper ul, #mdereminders_wrapper li { list-style-type: none; margin: 0px; padding: 0px; }
#mdereminders_wrapper a { font: inherit; text-decoration: none; color: #4183c4; }
#mdereminders_wrapper a:hover, #mdereminders_wrapper a:active { text-decoration: underline }
#mdereminders_wrapper code { 
	font: 11px normal Monaco, Verdana, Sans-serif; background-color: #f9f9f9; border: 1px solid #D0D0D0; color: #002166; 
	padding: 1px 8px; display: inline; }
#mdereminders_wrapper pre      { 
  font-family: Monaco, Verdana, Sans-serif; display: block; overflow: auto; width: auto !important; background-color: #f9f9f9; }
#mdereminders_wrapper pre code { border: none; padding: 4px; display: block; }
#mdereminders_wrapper table    { border: none; padding: 0px; margin:0px; font: inherit; }
#mdereminders_wrapper th, #mdereminders_wrapper td   { border: 1px dotted #ccc; padding: 2px; }
.mdereminders_entry    { display: none; height: 142px; }
.clear                { clear: both; }
.mdereminders_subblock { display:none; }
#mdereminders_title    { display: block; }
#mdereminders_title h2 { 
  margin: 0px; padding: 0px 0px 4px 0px; font: inherit; font-weight: bold; color: #999999; display: inline-block; float: left; }
#mdereminders_closer   { float: right; display: none; }

/* Specifics for JS */
#mdereminders.js #mdereminders_block1, 
#mdereminders.js #mdereminders_block2, 
#mdereminders.js #mdereminders_block3, 
#mdereminders.js #mdereminders_infos { 
  position: relative; margin: 0px; overflow: auto; padding: 0px 0px 10px 0px;
  background-color: #f9f9f9; font: inherit; display: inline-block;  }
#mdereminders.js #mdereminders_block1, 
#mdereminders.js #mdereminders_block2, 
#mdereminders.js #mdereminders_block3 { 
  float: left; height: 200px; border: 1px solid #EEEEEE; border-left: 0px; overflow-x: hidden }
#mdereminders.js #mdereminders_block1   { width: 160px; border-left: 1px solid #EEEEEE;  }
#mdereminders.js #mdereminders_block2   { width: 160px; }
#mdereminders.js #mdereminders_block3   { height: 198px; width: 436px; background: #fff; padding: 0px 12px 12px 12px; font: inherit; }
#mdereminders.js #mdereminders_infos    { width: 782px; height: 72px; position: relative; margin-top: 10px; }
#mdereminders.js #mdereminders_infos ul { margin-top: 10px; }
#mdereminders.js #mdereminders_reset    { float: right; margin: 2px 12px; }
#mdereminders_block1 ul, #mdereminders_block2 ul, #mdereminders_infos ul { list-style-type: none; margin: 0px; padding: 0px; }
#mdereminders_infos li { padding-left: 12px; font-size: 11px }
#mdereminders_block1 li a, #mdereminders_block2 li a { 
	display: block; margin: 0px; padding: 4px 12px; font: inherit; font-weight: bold; width: 136px; }
#mdereminders_block1 li a.active, #mdereminders_block2 li a.active,
#mdereminders_block1 li a:hover, #mdereminders_block2 li a:hover { 
	padding: 3px 12px; font: inherit; font-weight: bold; color: #404040;
	background-color: #fff; text-decoration: none; border: 1px solid #f0f0f0;
	border-right: 0px; border-left: 0px; }
#mdereminders.js div.mdereminders_entry   { height: 142px; width: 426px; padding-top: 0px; }
#mdereminders.js .mdereminders_title,
#mdereminders.js .mdereminders_backtop    { display: none; }

/* Specifics for no JS */
#mdereminders.nojs .mdereminders_subblock    { display:block; }
#mdereminders.nojs .mdereminders_entry       { display: block; height: auto !important;background: #fff; padding: 4px 8px; }
#mdereminders.nojs #mdereminders_wrapper     { width: 784px; height: auto !important; }
#mdereminders.nojs .mdereminders_title       { font-weight: bold; color: #4183c4; padding-bottom: 4px; }
#mdereminders.nojs .mdereminders_backtop     { text-align: right; font-size: 10px; }
#mdereminders.nojs #mdereminders_reset       { display: none; }
#mdereminders.nojs .mdereminders_subblock li { padding-left: 22px; }
#mdereminders.nojs #mdereminders_block1, 
#mdereminders.nojs .mdereminders_subblock, 
#mdereminders.nojs .mdereminders_entry, 
#mdereminders.nojs #mdereminders_infos {
  margin-bottom: 12px; padding-bottom: 4px; border-bottom: 1px dotted #EEEEEE; }

/* Specifics for the helper */
#mdereminders_closer a.helper,
#mdereminders_reset a.helper              { position: relative; font-size: 11px; text-decoration: none; }
#mdereminders_closer a.helper span,
#mdereminders_reset a.helper span         { display: none; text-decoration: none; }
#mdereminders_closer a.helper:hover, 
#mdereminders_closer a.helper:active,
#mdereminders_reset a.helper:hover, 
#mdereminders_reset a.helper:active       { background: none; /* bug IE */ z-index: 100; cursor: help; text-decoration: none; }
#mdereminders_closer a.helper.href:hover, 
#mdereminders_closer a.helper.href:active,
#mdereminders_reset a.helper.href:hover, 
#mdereminders_reset a.helper.href:active  { cursor: pointer; }
#mdereminders_closer a.helper:hover span, 
#mdereminders_closer a.helper:active span,
#mdereminders_reset a.helper:hover span, 
#mdereminders_reset a.helper:active span  { 
  display: inline-block; position: absolute;  top: -12px; right: 18px; padding: 6px;
  text-decoration: none; color: #404040; width: 420px !important; height: auto;
  background: #EEEEEE; border: 1px solid #ffffff; font-size: 11px;
  -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; }
#mdereminders_closer a.helper:hover span, 
#mdereminders_closer a.helper:active span { width: 120px !important; }
#mdereminders_wrapper a.helper:hover, #mdereminders_wrapper a.helper:active,
#mdereminders_wrapper a.helper:hover span, #mdereminders_wrapper a.helper:active span { 
  text-decoration: none !important; }
//-->
</style>
<script type="text/javascript">
<!--//

function MarkdownExtendedReminders(){}
(function() {
// Constructor / Init
	this._this = null; // singleton
	this._blocks = [ 'premenu_block', 'menu_block', 'content_block' ];
	this._options = {
		debug: false,
		special_key: 72, // 'h' or 'H'
		blocks_class: "mdereminders_block",
		premenu_block: "mdereminders_block1",
		menu_block: "mdereminders_block2",
		content_block: "mdereminders_block3",
		link_hide: "mdereminders_menuitem",
		link_show: "mdereminders_menuitem active",
		display_show: "inline-block",
		display_hide: "none",
		closer: "mdereminders_closer"
	};
	this._actives = {};
	this._opened = {};
	this._dom = {};
	this._specialKey = false;
	this._no_object = false;
	this._init = function(a){
		var _query = a || window.location.search;
		if (_query && (_query.toLowerCase() == '?plaintext' || _query.toLowerCase() == 'plaintext')) {
			this._no_object=true;
			return this;
		}
		if (this._this!==null) return this._this;
		for( i=0; i<this._blocks.length; i++)
			this.setDom( this._blocks[i], document.getElementById( this.getOpt( this._blocks[i] ) ) );
		if (_query && (_query.toLowerCase() == '?popup' || _query.toLowerCase() == 'popup'))
			this.showClosingTag();
		this._this = this;
		return this;
	};
	this._dbg = function(str){
		if(this.getOpt('debug')==true && window.console && window.console.log) window.console.log(str);
	};
	this.defined = function(x){ return typeof x != 'undefined'; };
// Getters / Setters
	this.isEmpty = function(){
		return this._no_object;
	};
	this.keyPressed = function(e){
		var event = e || window.event, _this = MarkdownExtendedReminders._init();
		if (event.keyCode == _this.getOpt('special_key'))
			_this._specialKey = true;
	};
	this.prevBlock = function( block ){
		var _num = this.findBlockIndex( block );
		return this._blocks[_num-1] || null;
	};
	this.nextBlock = function( block ){
		var _num = this.findBlockIndex( block );
		return this._blocks[_num+1] || null;
	};
	this.getOpt = function(a,b){
		return this._options[a] || b;
	};
	this.getDom = function(a){
		return this._dom[a] || null;
	};
	this.setDom = function(a,b){
		this._dom[a] = b;
	};
	this.getOpened = function(a){
		if (this.defined(this._opened[a])) return this._opened[a];
		else return null;
	};
	this.setOpened = function(a,b){
		this._opened[a] = b;
	};
	this.getActive = function(a){
		if (this.defined(this._actives[a])) return this._actives[a];
		else return null;
	};
	this.setActive = function(a,b){
		this._actives[a] = b;
	};
	this.getHash = function(){
		var myhash = location.hash;
		if (myhash) return myhash.substr(1);
		else return null;
	};
// Finders / Builders
	this.showClosingTag = function(){
		var _closer = document.getElementById( this.getOpt("closer") );
		if (_closer) _closer.style.display = this.getOpt("display_show");
	};
	this.findBlockIndex = function( block ){
		for( i=0; i<this._blocks.length; i++) {
			if (this._blocks[i] == block) return i;
		}
		return null;
	};
	this.findBlock = function( blockid, block ){
		if (!this.defined(block)) block = 'content_block';
		var _this = this.getDom( block ); 
		if (_this) { 
			var _child = _this.childNodes;
			if (_child) { 
				for (var i=0; i<_child.length; i++) {
					if (_child[i].id == blockid) return block;
				}
			}
		}
		var _prev = this.prevBlock( block );
		if (_prev) return this.findBlock( blockid, _prev );
		else return null;
	};
	this.findPosition = function( el, block ){
		if (!this.defined(block)) block = 'menu_block';
		var _this = this.getDom( block ); 
		if (_this) { 
			var _child_li = _this.getElementsByTagName("li");
			if (_child_li) { 
				for (var i=0; i<_child_li.length; i++) {
					if (_child_li[i].getElementsByTagName("a")[0] == el) return i;
				}
			}
		}
		var _prev = this.prevBlock( block );
		if (_prev) return this.findPosition( el, _prev );
		else return null;
	};
	this.getHandlerByPosition = function( block, position ){
		this._dbg("Entering 'getHandlerByPosition()' function with block="+block+" | position="+position);
		var _this = this.getDom( block ); 
		if (_this) { 
			var _child_li = _this.getElementsByTagName("li");
			if (_child_li && this.defined(_child_li[position]))
				return _child_li[position].getElementsByTagName("a")[0];
		}
		return null;
	};
	this.getBlockById = function( blockid ){
		this._dbg("Entering 'getBlockById()' function with blockid="+blockid );
		for ( i=0; i<this._blocks.length; i++) {
			var _this = this.getDom( this._blocks[i] ); 
			if (_this && _this.id == blockid) return this._blocks[i];
		}
		return null;
	};
	this.findLinker = function( hash, block ){
		this._dbg("Entering 'findLinker()' function with hash="+hash+" | block="+block );
		if (!this.defined(block)) block = 'menu_block';
		var _this = this.getDom( block ); 
		if (_this) { 
			var _child_li = _this.getElementsByTagName("li");
			if (_child_li) { 
				for (var i=0; i<_child_li.length; i++) {
					var myhref = _child_li[i].getElementsByTagName("a")[0].href;
					if (myhref && myhref.indexOf("#")) {
						var myhrefhash = myhref.substr( myhref.indexOf("#")+1 );
						if (myhrefhash == hash)
							return new Array( _child_li[i].parentNode.parentNode.id, i );
					}
				}
			}
		}
		return null;
	};
	this.findClosestDiv = function( el ){
		this._dbg("Entering 'findClosestDiv()' function with el="+el );
		var _myel = el.parentNode;
		if (_myel) {
			if (_myel.nodeName.toLowerCase() != 'div' && _myel.className != this.getOpt('blocks_class')) {
				while ((_myel.nodeName.toLowerCase() != 'div') || (_myel.className != this.getOpt('blocks_class'))) {
					_myel = _myel.parentNode;
					if (!_myel) break;
				}
			}
			return _myel;
		}
		return null;
	};
	this.buildLocation = function( hash ){
		var _url = document.location.href, _hash = this.getHash();
		if (_hash) _url = _url.replace(_hash, hash);
		else if (_url.lastIndexOf("#") == _url.length-1) _url += hash;
		else _url += '#'+hash;
		return _url;
	};
// Process
	this.blockToggler = function( blockid, what, handler ){
		this._dbg( "Entering function 'blockToggler()' with blockid="+blockid+" | what="+what+' | handler='+handler );
		var _this = document.getElementById( blockid ); 
		if (_this) { 
			if (!this.defined(what)) 
				what = (_this.style.display==this.getOpt('display_hide') ? this.getOpt('display_show') : this.getOpt('display_hide'));
			_this.style.display = what;
			if (what == this.getOpt('display_show')) {
				var _myblock = this.getBlockById( this.findClosestDiv(_this).id ),
					  _oprev = this.getOpened( _myblock );
				this.setOpened( _myblock, blockid );
				if (_oprev) this.blockToggler( _oprev, this.getOpt('display_hide') );
			}
		}
	};
	this.handlerToggler = function( handler, what ){
		if (handler) {
			this._dbg( "Entering function 'handlerToggler()' with handler="+handler+" | what="+what );
			handler.className = what;
			if (what == this.getOpt('link_show')) {
				var _myblock = this.getBlockById( this.findClosestDiv(handler).id ),
				    _oprev = this.getActive( _myblock );
				this.setActive( _myblock, this.findPosition( handler, _myblock ) );
				if (_oprev>=0) this.handlerToggler( this.getHandlerByPosition(_myblock, _oprev), this.getOpt('link_hide'));
			}
		}
	};
	this.clearBlock = function( block, full ){
		this._dbg( "Clearing block "+block );
		var _oprev = this.getOpened( block ),
			  _aprev = this.getActive( block );
		if (_oprev!==null && full!==false) {
			this.blockToggler( _oprev, this.getOpt('display_hide') );
			this.setOpened( block, null );
		}
		if (_aprev!==null) {
			this.handlerToggler( this.getHandlerByPosition(block, _aprev), this.getOpt('link_hide'));
			this.setActive( block, null );
		}
	};
// User Interface
	this.openBlock = function( openid, blockid, handler, close_others ){
		this._dbg( "Entering function 'openBlock()' with openid="+openid+" | blockid="+blockid+' | handler='+handler );
		if (this._specialKey==true) {
			var _url = this.buildLocation( openid );
			if (_url) {
				window.location = _url;
				this._specialKey = false;
			}
		}
		var _myblock = this.getBlockById( blockid ),
		    _this = this.getDom( _myblock );
		if (_this) { 
			var _child = _this.childNodes,
					_opd = this.getOpened(_myblock),
					_act = this.getActive(_myblock);
			if (_child) { 
				for (var i=0; i<_child.length; i++) {
					if (this.defined( _child[i].id )) {
						if (_child[i].id == openid) {
							if (!this.defined(_opd) || _opd != _child[i].id)
								this.blockToggler( _child[i].id, this.getOpt('display_show'), handler );
							if (_act)
								this.handlerToggler( this.getHandlerByPosition(_myblock, _act), this.getOpt('link_hide'));
							if (handler)
								this.handlerToggler( handler, this.getOpt('link_show') );
							if (close_others!==false) {
								var _next = this.nextBlock( _myblock );
								while (_next) {
									this.clearBlock( _next );
									_next = this.nextBlock( _next );
								}
							}
							return false;
						}
					}
				}
			}
		}
		return true;
	};
	this.openAndFollow = function( hash ){
		this._dbg( "Executing function 'openAndFollow()' with hash="+hash );
		if (hash) {
			var myblock = this.findBlock(hash);
			if (myblock) {
				var _opened = this.openBlock(hash, this.getDom( myblock ).id ),
						_prev = this.prevBlock( myblock );
				if (!_opened && _prev) {
					var mylinker = this.findLinker(hash, _prev);
					if (this.defined(mylinker[1])) {
						var _nopened = this.openBlock(mylinker[0], this.getDom( _prev ).id, this.getHandlerByPosition(_prev, mylinker[1]), false );
						if (_nopened===true)
							this.handlerToggler( this.getHandlerByPosition(_prev, mylinker[1]), this.getOpt('link_show'));
					}
					var _nprev = this.prevBlock( _prev );
					if (_nprev) {
						var _nlinker = this.findLinker(mylinker[0], _nprev);
						if (this.defined(_nlinker[1]))
							this.handlerToggler( this.getHandlerByPosition(_nprev, _nlinker[1]), this.getOpt('link_show'));
					}
					return false;
				}
			}
		}
		return true;
	};
	this.deepLinker = function(){
		var myhash = this.getHash();
		this._dbg( "Executing function 'deepLinker()', found hash="+myhash );
		if (myhash) return this.openAndFollow( myhash );
	};
	this.clearBlocks = function(){
		for( i=0; i<this._blocks.length; i++) {
			if (i!=0) this.clearBlock( this._blocks[i] );
			else this.clearBlock( this._blocks[i], false );
		}
	};
}).apply(MarkdownExtendedReminders);

//-->
</script>
<div id="mdereminders" class="nojs">
<div id="mdereminders_wrapper">

	<div id="mdereminders_title">
		<h2>Markdown Extended syntax reminders</h2>
		<div id="mdereminders_closer">
			<a class="helper href" href="#" onclick="return closeReminders();"><big>&nbsp;&Chi;&nbsp;</big><span><strong>Close this window</strong></span></a>
		</div>
	</div>
	<br class="clear" />
	<div id="mdereminders_block1" class="mdereminders_block">
		<ul>
			<li><a class="mdereminders_menuitem" href="#blockelements" onclick="return openBlock('blockelements', 'mdereminders_block2', this);" title="See this section">Block Elements</a></li>
			<li><a class="mdereminders_menuitem" href="#spanelements" onclick="return openBlock('spanelements', 'mdereminders_block2', this);" title="See this section">Span Elements</a></li>
			<li><a class="mdereminders_menuitem" href="#miscellaneous" onclick="return openBlock('miscellaneous', 'mdereminders_block2', this);" title="See this section">Miscellaneous</a></li>
		</ul>
	</div>

	<div id="mdereminders_block2" class="mdereminders_block">

		<div id="blockelements" class="mdereminders_subblock">
			<ul>
				<li><a class="mdereminders_menuitem" href="#paragraphsandbreaks" onclick="return openBlock('paragraphsandbreaks', 'mdereminders_block3', this);" title="See this section">Paragraphs & Breaks</a></li>
				<li><a class="mdereminders_menuitem" href="#headers" onclick="return openBlock('headers', 'mdereminders_block3', this);" title="See this section">Headers</a></li>
				<li><a class="mdereminders_menuitem" href="#blockquotes" onclick="return openBlock('blockquotes', 'mdereminders_block3', this);" title="See this section">Blockquotes</a></li>
				<li><a class="mdereminders_menuitem" href="#lists" onclick="return openBlock('lists', 'mdereminders_block3', this);" title="See this section">Lists</a></li>
				<li><a class="mdereminders_menuitem" href="#codeblocks" onclick="return openBlock('codeblocks', 'mdereminders_block3', this);" title="See this section">Code Blocks</a></li>
				<li><a class="mdereminders_menuitem" href="#horizontalrule" onclick="return openBlock('horizontalrule', 'mdereminders_block3', this);" title="See this section">Horizontal Rules</a></li>
				<li><a class="mdereminders_menuitem" href="#definitions" onclick="return openBlock('definitions', 'mdereminders_block3', this);" title="See this section">Definitions Lists</a></li>
				<li><a class="mdereminders_menuitem" href="#tables" onclick="return openBlock('tables', 'mdereminders_block3', this);" title="See this section">Tables</a></li>
			</ul>
		</div>

		<div id="spanelements" class="mdereminders_subblock">
			<ul>
				<li><a class="mdereminders_menuitem" href="#emphasis" onclick="return openBlock('emphasis', 'mdereminders_block3', this);" title="See this section">Emphasis</a></li>
				<li><a class="mdereminders_menuitem" href="#code" onclick="return openBlock('code', 'mdereminders_block3', this);" title="See this section">Codes</a></li>
				<li><a class="mdereminders_menuitem" href="#links" onclick="return openBlock('links', 'mdereminders_block3', this);" title="See this section">Links</a></li>
				<li><a class="mdereminders_menuitem" href="#images" onclick="return openBlock('images', 'mdereminders_block3', this);" title="See this section">Images</a></li>
				<li><a class="mdereminders_menuitem" href="#anchors" onclick="return openBlock('anchors', 'mdereminders_block3', this);" title="See this section">Anchors</a></li>
				<li><a class="mdereminders_menuitem" href="#abbreviations" onclick="return openBlock('abbreviations', 'mdereminders_block3', this);" title="See this section">Abbreviations</a></li>
				<li><a class="mdereminders_menuitem" href="#footnotes" onclick="return openBlock('footnotes', 'mdereminders_block3', this);" title="See this section">Footnotes</a></li>
			</ul>
		</div>

		<div id="miscellaneous" class="mdereminders_subblock">
			<ul>
				<li><a class="mdereminders_menuitem" href="#automaticlinks" onclick="return openBlock('automaticlinks', 'mdereminders_block3', this);" title="See this section">Automatic Links</a></li>
				<li><a class="mdereminders_menuitem" href="#references" onclick="return openBlock('references', 'mdereminders_block3', this);" title="See this section">References</a></li>
				<li><a class="mdereminders_menuitem" href="#specialnotes" onclick="return openBlock('specialnotes', 'mdereminders_block3', this);" title="See this section">Special Notes</a></li>
				<li><a class="mdereminders_menuitem" href="#escaping" onclick="return openBlock('escaping', 'mdereminders_block3', this);" title="See this section">Escaping</a></li>
			</ul>
		</div>

	</div>

	<div id="mdereminders_block3" class="mdereminders_block">

		<div id="paragraphsandbreaks" class="mdereminders_entry">
			<div class="mdereminders_title">Paragraphs & Breaks</div>
			<p>A paragraph is just some consecutive lines of text, wrapped between blank lines (<em>or equivalent</em>).</p>
			<pre><code>
This is my first paragraph.

And this is my second,
on two lines ...
			</code></pre>
			<p>This means that if you want to see a line-break, you will have to write it litterally :</p>
			<pre><code>This is a paragraph.
&lt;br /&gt;with a line-break ...</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="headers" class="mdereminders_entry">
			<div class="mdereminders_title">Headers</div>
			<p>Markdown supports two styles of headers, <a href="http://docutils.sourceforge.net/mirror/setext.html">Setext</a> and <a href="http://www.aaronsw.com/2002/atx/">atx</a>.</p>
			<p><strong>Setext style:</strong>
				First-level titles are underlined by equal signs and second level by dashes.
			</p>
			<pre><code>my title level 1
================

my title level 2
----------------</code></pre>
			<p><strong>ATX style:</strong>
				Prefix title with one or more hash marks, the number increases the title level.
			</p>
			<pre><code># my title level 1
### my title level 3</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="blockquotes" class="mdereminders_entry">
			<div class="mdereminders_title">Blockquotes</div>
			<p>Begin each line with a <code>&gt;</code> sign.</p>
			<pre><code>> This is my blockquote
> and a second line ...</code></pre>
			<p>Other span and block elements are allowed inside a <em>blockquote</em> block as long as you begin every line by <code>&gt;</code>. The possible indentation of the included block begin after this sign.</p>
			<pre><code>> My citation
>
> With a paragraph and some `code`
>
>     and even a preformatted string</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="lists" class="mdereminders_entry">
			<div class="mdereminders_title">Lists</div>
			<p>Begin each entry by an asterisk <code>*</code>, a plus <code>+</code> or an hyphen <code>-</code> followed by 3 spaces.</p>
			<pre><code>-   first item
-   second item</code></pre>
			<p>Each item must be on a separate line. You can write sub-items indenting these entries.</p>
			<pre><code>-   first item
-   second item
    -   first sub-item
    -   second sub-item</code></pre>
			<p>To build an ordered list, begin each entry by a number followed by a period and 3 spaces (<em>the order of the written entries is not important</em>).</p>
			<pre><code>1.   first item
1.   second item</code></pre>
			<p>Other span and block elements are allowed inside each <em>list item</em> as long as you indent all these blocks.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="codeblocks" class="mdereminders_entry">
			<div class="mdereminders_title">Code Blocks</div>
			<p>Pre-formatted content are constructed by beginning each line with 4 spaces</p>
			<pre><code>    // this is my "pre" block
    $var = val_fct();</code></pre>
			<p>Alternatly, you can write some fenced code blocks surrounding them by lines of 3 or more tildes <code>~</code>.</p>
			<pre><code>~~~~
My code here
~~~~</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="horizontalrule" class="mdereminders_entry">
			<div class="mdereminders_title">Horizontal Rule</div>
			<p>Write 3 or more hyphens <code>-</code>, asterisks <code>*</code> or underscores <code>_</code> on a line.</p>
			<pre><code>My end of a paragraph ....
----
And this is my rest ...</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="definitions" class="mdereminders_entry">
			<div class="mdereminders_title">Definitions Lists</div>
			<p>To build some definitions lists, just write each term on a seperate line, and each definition on a new line, beginning with colon followed by 3 or more spaces.</p>
			<p>You can write many definitions for a single term.</p>
			<pre><code>Word
:   Definition content (first one)
    with a two-lines text

:   Second definition for this term...</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="tables" class="mdereminders_entry">
			<div class="mdereminders_title">Tables</div>
			<p>Tables are constructed by visual resemblance. The first line (<em>the headers</em>) and the second one (<em>the separator</em>) are required.</p>
			<pre><code>[an optional caption]
| First Header  | Second Header | Third Header |
| ------------- | ------------: | :----------: |
| Content Cell  | Content right-aligned | Content center-aligned |
| Content Cell  | Content on two columns ||

  will produce:
  
<table>
	<caption>an optional caption</caption>
	<thead><tr>
		<th>First Header</th>
		<th align="right">Second Header</th>
		<th align="center">Third Header</th>
	</tr></thead>
	<tbody>
		<tr>
			<td>Content Cell</td>
			<td align="right">Content right-aligned</td>
			<td align="center">Content center-aligned</td>
		</tr>
		<tr>
			<td>Content Cell</td>
			<td align="right" colspan="2">Content on two columns</td>
		</tr>
	</tbody>
</table>
</code></pre>
			<p>Use colons around seperate line to manage alignment of a column (colon on the right is right-aligned, on the left is left-aligned and on both sides is center-aligned). Tables can have many lines of headers and many body sections by passing a blank line between them.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="emphasis" class="mdereminders_entry">
			<div class="mdereminders_title">Emphasis</div>
			<p>Emphasis is written by surrounding word or expression between asterisks <code>*</code> or underscores <code>_</code>.</p>
			<p>Bold text takes 2 of them.</p>
			<pre><code>**my content** or __my content__</code></pre>
			<p>Italic text takes only one of them.</p>
			<pre><code>*my content* or _my content_</code></pre>
			<p>Expressions or terms with underscores in emphasis span will be escaped.</p>
			<pre><code>"_my_underscored_content_" will produce "<em>my_underscored_content</em>" and not "<em>my</em> underscored <em>content</em>"</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="code" class="mdereminders_entry">
			<div class="mdereminders_title">Code</div>
			<p>Surround your code between backtick quotes <code>`</code>.</p>
			<pre><code>This is a `function()` in a text.</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="links" class="mdereminders_entry">
			<div class="mdereminders_title">Links</div>
			<p>Hypertext links this rule:</p>
			<pre><code>There is my text with [an hypertext link](http://example.com/ "Optional link title") you can follow ...</code></pre>
			<p>The URL can be absolute or relative. <a href="#reference" onclick="return openAndFollow('references', 'mdereminders_block3');" title="See this section">References</a> can be used to make your content more readable.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="images" class="mdereminders_entry">
			<div class="mdereminders_title">Images</div>
			<p>Embedded images followed almost the same syntax rule as links:</p>
			<pre><code>this is my image: ![Alt text](/path/to/img.jpg "Optional image title")</code></pre>
			<p>The URL can be absolute or relative. <a href="#reference" onclick="return openAndFollow('references', 'mdereminders_block3');" title="See this section">References</a> can be used to make your content more readable.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="anchors" class="mdereminders_entry">
			<div class="mdereminders_title">In-page Anchors</div>
			<p>Write your anchor ID between curly brackets.</p>
			<pre><code>A paragraph with [a link]{#anchor} in context.

  will reach, anywhere in a title of the page:

## my title {#anchor}</code></pre>
			<p>Anchors can just be set on titles.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="abbreviations" class="mdereminders_entry">
			<div class="mdereminders_title">Abbreviations</div>
			<p>Abbreviations are written like <a href="#reference" onclick="return openAndFollow('references', 'mdereminders_block3');" title="See this section">references</a>, beginning by an asterisk <code>*</code>.</p>
			<pre><code>A paragraph with the word HTML.

*[HTML]: Hyper-Text Markup Language</code></pre>
			<p>Abbreviations are automatically replaced in text as they are defined anywhere in the document.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="footnotes" class="mdereminders_entry">
			<div class="mdereminders_title">Footnotes</div>
			<p>Footnotes are written like <a href="#reference" onclick="return openAndFollow('references', 'mdereminders_block3');" title="See this section">references</a>, with an ID beginning by a circumflex <code>^</code>.</p>
			<pre><code>A paragraph with the a footnote[^footnote_one] note.

[^footnote_one]: Footnote content</code></pre>
			<p>Footnotes can be listed at the end of each block. Just use <code>[^id]</code> in content.</p>
			<p>Other span and block elements are allowed inside a <em>footnote</em> block as long as you do not pass a blank line.</p>
			<p>You can create a <strong>glossary</strong> or a <strong>bibliography</strong> using features of <a href="#specialnotes" onclick="return openAndFollow('specialnotes', 'mdereminders_block3');" title="See this section">Special Notes</a>.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="automaticlinks" class="mdereminders_entry">
			<div class="mdereminders_title">Automatic Links</div>
			<p>Markdown will automatically transform URLs or email addresses in "href" or "mailto" links.</p>
			<pre><code>My paragraph with a link to &lt;http://example.com/&gt; and an email &lt;address@email.com&gt; to contact.

    will produce:

My paragraph with a link to <a href="http://example.com/">http://example.com/</a> and an email <a href="mailto:address@email.com">address@email.com</a> to contact.
</code></pre>
			<p>Email addresses are automatically anti-spammed.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="references" class="mdereminders_entry">
			<div class="mdereminders_title">References</div>
			<p>You can use references for links or images. This allows you to write some more easy-to-read content by writing the attributes of the element after this content.</p>
			<pre><code>A paragraph with a referenced [hypertext link][myid] and some more text embedding an image: ![image for the test][myimage].

[myid]: http://example.com/ "Optional link title"
[myimage]: http://example.com/test.com "Optional image title" width=40px height=40px</code></pre>
			<p>References are basically constructed by writting the ID of the definition in content and this definition anywhere in the document, on a single line, with no space to begin and writting first the ID between brackets followed by a colon and the classic definition of the object.</p>
			<p>This way you can write all your references at the end of your document, for example, and make multi-calls of each reference.</p>
			<p>The references allows you to add some attributes for the generated tag. Just write them at the end of the reference line.</p>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="specialnotes" class="mdereminders_entry">
			<div class="mdereminders_title">Special Notes</div>
			<p>You can construct a <strong>glossary</strong> or a <strong>bibliography</strong> by using special footnotes.</p>
			<p><strong>Glossary notes</strong> are constructed like a footnote, except that the first line of the note will contain <code>glossary:</code> followed by the term defined. The associated definition has to be placed on a second line.</p>
			<pre><code>A paragraph with a referenced [glossary term][myterm] ...

[^myterm] glossary: the term defined (an optional sort key)
	The term definition ... which may be multi-line.</code></pre>
			<p><strong>Bibliography notes</strong> are constructed like a glossary, except that their IDs begins by a sharp <code>#</code> and the in-text call may contain two parts.</p>
			<pre><code>This is a statement that should be attributed to its source [p. 23][#Doe:2006].

[#Doe:2006]: John Doe. *Some Big Fancy Book*.  Vanity Press, 2006.</code></pre>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

		<div id="escaping" class="mdereminders_entry">
			<div class="mdereminders_title">Escaping</div>
			<p>As Markdown is based on simple syntax wrapping parts of content between special signs, to use them literally, these signs must be escaped with a backslash <code>\</code>:</p>
			<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><code>\</code> backslash</td>
				<td><code>.</code> dot</td>
				<td><code>!</code> exclamation point</td>
				<td><code>#</code> hash mark</td>
			</tr><tr>
				<td><code>*</code> asterisk</td>
				<td><code>+</code> plus sign</td>
				<td><code>-</code> hyphen</td>
				<td><code>_</code> underscore</td>
			</tr><tr>
				<td><code>`</code> backtick quote</td>
				<td><code>()</code> parentheses</td>
				<td><code>[]</code> brackets</td>
				<td><code>{}</code> curly brackets</td>
			</tr>
			</table>
			<div class="mdereminders_backtop"><a href="#mdereminders" title="Back to top">top</a></div>
		</div>

	</div>
	<br class="clear" />
	<div id="mdereminders_infos">
		<div id="mdereminders_reset">
			<a class="helper href" href="#" onclick="return clearBlocks();"><big>&nbsp;&#8617;&nbsp;</big><span><strong>Reset this page</strong><br />By clicking on this link, document will be reloaded without any opened link.</span></a>
			<br />
			<a class="helper" href="javascript:void(0);"><big>&nbsp;&oplus;&nbsp;</big><span><strong>Keyboard chortcut ['H' = 'href']</strong><br />A keyboard shortcut is set to load the URL links in the navigation bar of your browser by pressing letter 'H' (<em>case-insensitive</em>) when clicking on a link.</span></a>
			<br />
			<a class="helper href" href="http://github.com/atelierspierrot/markdown-extended" target="_blank"><big>&nbsp;&copy;&nbsp;</big><span><strong><em>PHP Markdown Extended</em> is an <em>open source</em> application</strong><br />Follow this link to get the source code from GitHub repository.</span></a>
		</div>
		<ul>
			<li><strong>Markdown</strong> is a text-to-HTML conversion tool written by <a href="http://daringfireball.net/" title="See http://daringfireball.net/">John Gruber</a> - &copy; 2004 John Gruber (<em>Perl</em> script).</li>
			<li><strong>Markdown Extra</strong> is a PHP extended version written by <a href="http://michelf.com/" title="See http://michelf.com/">Michel Fortin</a> - &copy; 2009 Michel Fortin (<em>PHP</em> script).</li>
			<li><strong>(peg) MultiMarkdown</strong> is a C extended version wirtten by <a href="http://fletcherpenney.net/" title="See http://fletcherpenney.net/">Fletcher Penney</a> - &copy; 2010-2011 Fletcher T. Penney (<em>C</em> and <em>Perl</em> script).</li>
			<li><strong>PHP Markdown Extended</strong> is a PHP extended version wirtten by <a href="http://www.ateliers-pierrot.fr/" title="See http://www.ateliers-pierrot.fr/">Pierre Cassat</a> - &copy; 2012 Pierre Cassat & contributors (<em>PHP</em> script).</li>
		</ul>
	</div>
</div>
</div>
<script type="text/javascript">
<!--//
// the cheat sheet object
var mdereminders_obj = MarkdownExtendedReminders._init( typeof(MDEremindersInit)=='undefined' ? null : MDEremindersInit );
function openBlock(a,b,c){ return mdereminders_obj.isEmpty() || mdereminders_obj.openBlock(a,b,c); }
function clearBlocks(){ return mdereminders_obj.isEmpty() || mdereminders_obj.clearBlocks(); }
function openAndFollow(a){ return mdereminders_obj.isEmpty() || mdereminders_obj.openAndFollow(a); }
function closeReminders(){ window.close(); var _opnr=window.opener; if(_opnr)_opnr.focus(); return false; }
if (!mdereminders_obj.isEmpty()){
	// for accessibility
	document.getElementById("mdereminders").className="js";
	// for keyboard shortcut
	document.onkeydown = mdereminders_obj.keyPressed;
	// launch deep linking when doc is loaded
	window.onload = mdereminders_obj.deepLinker();
}
//-->
</script>