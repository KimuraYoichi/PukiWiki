<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="html"/>
	<xsl:template match="/">
		<html>
			<xsl:apply-templates/>
		</html>
	</xsl:template>
	<xsl:template match="情報セキュリティ管理項目">
		<h1 align="center">情報セキュリティ管理項目</h1>
		<xsl:for-each select="MainObjectList">
			<xsl:apply-templates/>
		</xsl:for-each>
	</xsl:template>
	<xsl:template match="MainObject">
		<h2>主対象</h2>
		<h2>
			<xsl:value-of select="."/>
		</h2>
	</xsl:template>
	<xsl:template match="SubObjectList">
		<tr>
			<xsl:apply-templates/>
		</tr>
	</xsl:template>
	<xsl:template match="SubObject">
		<h2>対象: <xsl:value-of select="."/>
		</h2>
	</xsl:template>
	<xsl:template match="Purpose">
		<h2>
			<xsl:value-of select="."/>
		</h2>
	</xsl:template>
	<xsl:template match="MainControlList">
		<table border="5">
			<xsl:apply-templates/>
		</table>
	</xsl:template>
	<xsl:template match="MainControl">
		<thead>
			<tr bgcolor="lightcyan">
				<th>コントロール</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<xsl:value-of select="."/>
				</td>
			</tr>
		</tbody>
	</xsl:template>
	<xsl:template match="SubControlList">
		<thead>
			<tr bgcolor="lavender">
				<th>サブコントロール</th>
			</tr>
		</thead>
		<tbody>
			<xsl:apply-templates/>
		</tbody>
	</xsl:template>
	<xsl:template match="SubControl">
		<tr>
			<td>
				<xsl:value-of select="."/>
			</td>
		</tr>
	</xsl:template>
	<xsl:template match="Comments">
		<tr bgcolor="skybluew">
			<td>
				<xsl:value-of select="."/>
			</td>
		</tr>
	</xsl:template>
</xsl:stylesheet>
