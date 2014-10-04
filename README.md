Pagination-PHP-POO-MySQL
========================

Basic Pagination PHP POO and MySQL

<h2>Use</h2>
<p>Instance:</p>
<code>new Pagination(table,countRecord);</code>
<p>Example:</p>
<code>$pagination = new Pagination('Book', 5);</code>
<h3>And add Multiple Where in sentence:</h3>
<code>$pagination->setWhere(array(array(attribute,condition,value),array(attribute,condition,value),etc));</code>
<p>Example:</p>
<code>$pagination->setWhere(array(array('Status','=',1),array('ID','>',3)));</code>
<p>Query result:</p>
<code>SELECT * FROM Book WHERE Status=1 AND ID>3</code>
<h3>And add order by in sentence:</h3>
<code>$pagination->setOrderBy(array(attribute,asc or desc));</code>
<p>Example:</p>
<code>$pagination->setOrderBy(array('Pages','DESC'));</code>
<p>Query result:</p>
<code>SELECT * FROM Book ORDER BY Pages DESC</code>
<h3>Get Records:</h3>
<pre>
	if (isset($_GET['page']))
	    $query = $pagination->getRecords($_GET['page']);
	else
	    $query = $paginacion->getRecords(1);
	while ($row = mysql_fetch_array($query)) {
	    //show your attribute
	}
</pre>
<p>Show list of pages and current page:</p>
<pre>
	for ($i=1; $i &lt;= $pagination->getPages(); $i++) { 
	  $active = ($pagination->getCurrentPage()==$i) ? ' class="active"':'';
	  echo '&lt;li'.$active.'>&lt;a href="#" >'.$i.'&lt;/a>&lt;/li>';
	}
</pre>