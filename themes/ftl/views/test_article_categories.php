<h1>&lt;ion:article:categories /></h1>

<p>
	Used in the context of the parent "<b>article</b>" tag, the <b>categories</b> tag displays the article's categories.
</p>

<h2>Categories as simple string</h2>

<h3>Result</h3>

<ion:page id="3">
	<ion:articles>
		<h3>Article ID : <ion:article:id/> - Title : <ion:article:title/></h3>
		<p>Article categories : </p>
		<ion:article:categories link="true" separator=" &bull; "/>
	</ion:articles>
</ion:page>

<hr/>

<h2>Categories in list</h2>

<pre>
&lt;ion:page id="3">
	&lt;ion:articles>
		&lt;h3>Article ID : &lt;ion:article:id/> - Title : &lt;ion:article:title/>&lt;/h3>
		&lt;p>Article categories : &lt;/p>
		&lt;ion:article:categories tag="ul" child-tag="li" link="true" />
	&lt;/ion:articles>
&lt;/ion:page>
</pre>

<h3>Result</h3>

<ion:page id="3">
	<ion:articles>
		<h3>Article ID : <ion:article:id/> - Title : <ion:article:title/></h3>
		<p>Article categories : </p>
		<ion:article:categories tag="ul" child-tag="li" link="true" />
	</ion:articles>
</ion:page>
