<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
	<h2>My CD Collection</h2>
	<xsl:for-each select="catalog/cd">
     <div style="display:inline">
		<xsl:value-of select="title"/>
	 </div>
	 <div style="display:inline;margin-left:5px">
		<xsl:value-of select="year"/>
	</div>
	<div></div>
	</xsl:for-each>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
