<?php die("Access Denied"); ?>#x#a:4:{s:4:"body";s:6765:"
<div id="system">

	
	<article class="item">

				<header>
		
										
										
			<h1 class="title">
								<time datetime="2011-05-02" pubdate>
					<span class="month">трав.</span>
					<span class="day">02</span>
				</time>
							
									<a href="/index.php/accordion-a/level-2/2-uncategorised/4-typography">Typography</a>
							</h1>

						<p class="meta">
		
				Автор: Super User. Posted in <a href="/index.php/accordion-a/level-2/2-uncategorised">Uncategorised</a>	
			
			</p>
			
		</header>
			
		
		<div class="content clearfix">
		

<p>You can create some beautiful content by using some simple HTML elements. The Warp theme framework offers some neat styles for all HTML elements and a great set of CSS classes to style your content. Basic HTML is very easy to learn and this small guide shows you how to use all styles provided by the Warp framework.</p>

<h2>Basic HTML Elements</h2>

<p>Here is a short demonstration of text-level semanticts. The &lt;p&gt; element creates a new paragraph. It will have some space before and after itself. To turn your text into hypertext just use the <a href="#">&lt;a&gt; element</a>.</p>

<h3>Text-Level Semantics</h3>

<p>You can emphasize text using the <em>&lt;em&gt; element</em> or to imply any extra importance the <strong>&lt;strong&gt; element</strong>. Highlight text with no semantic meaning using the <mark>&lt;mark&gt; element</mark>. Markup document changes like inserted or deleted text with the <del>&lt;del&gt; element</del> or <ins>&lt;ins&gt; element</ins>. To define an abbreviation use the <abbr title="Abbreviation Element">&lt;abbr&gt; element</abbr> and to define a definition term use the <dfn title="Defines a definition term">&lt;dfn&gt; element</dfn>.</p>

<h3>Short List with Links</h3>

<ul>
	<li><a href="http://www.yootheme.com" target="_blank">YOOtheme</a> - Premium Joomla Templates and WordPress Themes</li>
	<li><a href="http://www.yootheme.com/warp" target="_blank">Warp Framework</a> - Fast and Slick Theme Framework</li>
	<li><a href="http://www.yootheme.com/zoo" target="_blank">ZOO</a> - Content Application Builder</li>
	<li><a href="http://www.yootheme.com/icons" target="_blank">Stock Icons</a> - For Web and Print Projects</li>
</ul>

<h3>Quotations and Code</h3>

<p>Inline quotations can be defined by using the <q>&lt;q&gt; element</q>.</p>

<blockquote>The &lt;blockquote&gt; element defines a long quotation which also creates a new block by inserting white space before and after the blockquote element.</blockquote>

<p>To define a short inline computer code use the <code>&lt;code&gt; element</code>. For a larger code snippet use the &lt;pre&gt; element which defines preformatted text. It creates a new text block which preserves both spaces and line breaks.</p>

<pre>
pre {
    margin: 15px 0;
    padding: 10px;
    font-family: "Courier New", Courier, monospace;
    font-size: 12px;
    line-height: 18px;
    white-space: pre-wrap;
}
</pre>

<small>Use the &lt;small&gt; element for side comments and small print.</small>

<hr />

<h2>Useful CSS Classes</h2>

<p>Here is a short demonstration of all style related CSS classes provided by the Warp framework.</p>

<h3>Highlight Content</h3>

<p class="dropcap">Drop caps are the first letter of a paragraph which are displayed bigger than the rest of the text. You can create a drop cap using the CSS class <code>dropcap</code>. To emphasize text with some small boxes use <em class="box">&lt;em&gt; element</em> with the CSS class <code>box</code>.</p>

<div class="box-content">This simple box is intended to group large parts of your content using the CSS class <code>box-content</code>.</div>
<div class="box-note">This is a simple box to highlight some text using the CSS class <code>box-note</code>.</div>
<div class="box-info">This is a simple box with useful information using the CSS class <code>box-info</code>.</div>
<div class="box-warning">This is a simple box with important notes and warnings using the CSS class <code>box-warning</code>.</div>
<div class="box-hint">This is a simple box with additional hints using the CSS class <code>box-hint</code>.</div>
<div class="box-download">This is a simple box with download information using the CSS class <code>box-download</code>.</div>

<p>Use the CSS class <code>dotted</code> to create a dotted horizontal rule.</p>

<hr class="dotted" />

<h3>Tables</h3>

<p>Create a zebra stripped table using using the CSS class <code>zebra</code>.</p>

<table class="zebra">
	<caption>Table caption</caption>
	<thead>
		<tr>
			<th>Table Heading</th>
			<th>Table Heading</th>
			<th class="center">Table Heading</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td>Table Footer</td>
			<td>Table Footer</td>
			<td class="center">Table Footer</td>
		</tr>
	</tfoot>
	<tbody>
		<tr class="odd">
			<td>Table Data</td>
			<td>Table Data</td>
			<td class="center">Data Centered</td>
		</tr>
		<tr>
			<td class="bold">Data Bold</td>
			<td>Table Data</td>
			<td class="center">Data Centered</td>
		</tr>
		<tr class="odd">
			<td>Table Data</td>
			<td>Table Data</td>
			<td class="center">Data Centered</td>
		</tr>
	</tbody>
</table>

<h3>Definition Lists</h3>

<p>Create a nice looking definition list separated with a line by using the CSS class <code>separator</code>.</p>

<dl class="separator">
	<dt>Definition List</dt>
	<dd>A definition list is a list of terms and corresponding definitions. To create a definition list use the &lt;dl&gt; element in conjunction with &lt;dt&gt; to define the definition term and &lt;dd&gt; to define the definition description.</dd>
	<dt>Definition Term</dt>
	<dd>This is a definition description.</dd>
	<dt>Definition Term</dt>
	<dd>This is a definition description.</dd>
	<dd>This is another definition description.</dd>
</dl>

<h3>Forms</h3>

<p>Create a clearly arranged form layout with fieldset boxes using the CSS class <code>box</code>.</p>

<form action="#" class="box">

	<fieldset>
		<legend>Form legend</legend>
		<div><label for="f1">Text input:</label> <input type="text" value="input text" id="f1"/></div>
		<div><label for="f2">Radio input:</label> <input type="radio" id="f2"/></div>
		<div><label for="f3">Checkbox input:</label> <input type="checkbox" id="f3"/></div>
		<div><label for="f4">Select field:</label> <select id="f4"><option>Option 01</option><option>Option 02</option></select></div>
		<div><label for="f5">Textarea:</label><br/><textarea rows="5" cols="30" id="f5">Textarea text</textarea></div>
	</fieldset>
	
	<button>Button</button> <input type="button" value="Input Button" />
	
</form> 		</div>

		
			
	</article>

</div>
";s:4:"head";a:10:{s:5:"title";s:10:"Typography";s:11:"description";N;s:4:"link";s:0:"";s:8:"metaTags";a:2:{s:10:"http-equiv";a:1:{s:12:"content-type";s:9:"text/html";}s:8:"standard";a:3:{s:8:"keywords";N;s:6:"rights";N;s:6:"author";s:10:"Super User";}}s:5:"links";a:0:{}s:11:"styleSheets";a:0:{}s:5:"style";a:0:{}s:7:"scripts";a:3:{s:33:"/media/system/js/mootools-core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:24:"/media/system/js/core.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}s:27:"/media/system/js/caption.js";a:3:{s:4:"mime";s:15:"text/javascript";s:5:"defer";b:0;s:5:"async";b:0;}}s:6:"script";a:1:{s:15:"text/javascript";s:76:"window.addEvent('load', function() {
				new JCaption('img.caption');
			});";}s:6:"custom";a:0:{}}s:7:"pathway";s:1:"
";s:6:"module";a:0:{}}