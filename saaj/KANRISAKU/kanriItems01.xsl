<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/TR/WD-xsl" xml:lang="ja">
<xsl:template match="/">
<html lang="ja">
<head>
<title>情報セキュリティ管理項目</title>
<style type="text/css">
.frame1{position:absolute;font-size:11pt;border-width:thick;border-color:gray;border-style:double;height:180;width:250;overflow:auto;padding:3;margin-top:20;}
.frame2{position:absolute;font-size:11pt;border-width:thick;border-color:gray;border-style:double;height:180;width:600;overflow:auto;padding:3;margin-top:20;margin-left:300}
.frame3{position:absolute;font-size:11pt;border-width:thick;border-color:gray;border-style:double;height:150;width:900;overflow:auto;padding:3;margin-top:230;}
.frame4{position:absolute;font-size:11pt;border-width:thick;border-color:gray;border-style:double;height:150;width:900;overflow:auto;padding:3;margin-top:410;}
.frame5{position:absolute;font-size:11pt;border-width:thick;border-color:gray;border-style:double;height:150;width:900;overflow:auto;padding:3;margin-top:580;}

</style>

<script type="text/vbscript">
<xsl:comment>
<![CDATA[
option explicit
dim xmldoc,i,j,k
dim N1,N2,N3,N4,N5,N6
public N
dim mainObjectNode,mainObjectList
dim mainObjectContent

dim patternstring,patternstring2
dim subObjectNode,purposeNode,subObjectList
dim subObjectContent

dim mainControlNode,mainControlList
dim mainControlContent


dim subControlNode,subControlList
dim subControlContent

dim CommentNode,CommentList


sub window_onload()
	'XML DOMオブジェクトを使えるようにする．(お約束) 
	set xmldoc=createObject("Microsoft.XMLDom")
	xmldoc.async=false
	xmldoc.load("KanriItems01.xml")
	
	'「MainObject」の内容にアクセスする．
	set mainObjectNode=xmldoc.getElementsByTagName("MainObject")

	'「MainObject」があれば，その内容を変数mainObjectListに格納する．
	if mainObjectNode.length>0 then
		for i=0 to mainObjectNode.length-1
			mainObjectList=mainObjectList & "<div style='cursor:hand' id='headerID" & i & "'" & " onclick='mainObjcetgo(" & i & ")'>" & mainObjectNode(i).text & "</div>"
		next
	else
		exit sub
	end if
			'MainObjectを表示する．
			mainObjectMenu.innerHTML=mainObjectList
end sub

sub mainObjcetgo(N1)
	'MainObjectをクリックしたときの背景色の設定．
	for i=0 to mainObjectNode.length-1
		document.all("headerID" & i).style.backgroundColor="white"
	next
	
	document.all("headerID" & N1).style.backgroundColor="silver"

	'クリックしたMainObjectを変数mainObjectContentに格納する．
	mainObjectContent=document.all("headerID" & N1).innerText
	call subObjectSearch(mainObjectContent)
end sub

sub subObjectSearch(mainObjectContent)
	mainControlMenu.innerHTML=""
	subControlMenu.innerHTML=""
	subObjectMenu.innerHTML=""
	subObjectNode=""
	purposeNode=""
	subObjectList=""
    subObjectContent=""

	
	'MainObjectを格納した変数mainObjectContentを検索キーとして，それぞれの要素の内容を取り出す．

	patternstring="情報セキュリティ管理項目/MainObjectList[MainObject='" & mainObjectContent & "'" & "]/SubObjectList/SubObject"
	set subObjectNode=xmldoc.selectNodes(patternstring)

	patternstring2="情報セキュリティ管理項目/MainObjectList[MainObject='" & mainObjectContent & "'" & "]/SubObjectList/Purpose"
	set purposeNode=xmldoc.selectNodes(patternstring2)


	'「小見出し」があれば，その内容を変数subObjectListに格納する．
	if subObjectNode.length>0 then
		for j=0 to subObjectNode.length-1
			subObjectList=subObjectList & "<div style='cursor:hand' id='headerID2" & j & "'" & " onclick='subObjectGo(" & j & ")'>" & subObjectNode(j).text & "</div>"
			subObjectList=subObjectList & "<div >" & purposeNode(j).text & "</div>"
		next
	else
		exit sub
	end if

	'SubObjectを表示する．
		subObjectMenu.innerHTML=subObjectList

end sub

sub subObjectGo(N2)
	'SubObjectをクリックしたときの背景色の設定．
	for i=0 to subObjectNode.length-1
		document.all("headerID2" & i).style.backgroundColor="white"
	next
	
	document.all("headerID2" & N2).style.backgroundColor="silver"

	'クリックしたSubObjectを変数subObjectContentに格納する．
	subObjectContent=document.all("headerID2" & N2).innerText
	call mainControlSearch(subObjectContent)
end sub

sub mainControlSearch(subObjectContent)
	mainControlMenu.innerHTML=""
	subControlMenu.innerHTML=""
	CommentMenu.innerHTML=""
	mainControlNode=""
	mainControlList=""
    mainControlContent=""

	
	'MainObject,SubObjectを格納した変数mainObjectContentを検索キーとして，それぞれの要素の内容を取り出す．

	patternstring="情報セキュリティ管理項目/MainObjectList[MainObject='" & mainObjectContent & "'" & "]/SubObjectList[SubObject='" & subObjectContent & "'" & "]/MainControlList/MainControl"
	set mainControlNode=xmldoc.selectNodes(patternstring)


	'その内容を変数mainControlListに格納する．
	if mainControlNode.length>0 then
		for j=0 to mainControlNode.length-1
			mainControlList=mainControlList & "<div style='cursor:hand' id='headerID3" & j & "'" & " onclick='mainControlGo(" & j & ")'>" & mainControlNode(j).text & "</div>"
		next
	else
		exit sub
	end if

	'mainControlを表示する．
		mainControlMenu.innerHTML=mainControlList
end sub


sub mainControlGo(N3)
	'mainControlをクリックしたときの背景色の設定．
		subControlMenu.innerHTML=""

	for k=0 to mainControlNode.length-1
		document.all("headerID3" & k).style.backgroundColor="white"
	next
	
	document.all("headerID3" & N3).style.backgroundColor="silver"

	'クリックしたMainControlを変数mainControlContentに格納する．
	mainControlContent=document.all("headerID3" & N3).innerText
	call subControlSearch(mainControlContent,N3)
end sub

sub subControlSearch(mainControlContent,N4)
	subControlMenu.innerHTML=""
	CommentMenu.innerHTML=""
	subControlNode=""
	subControlList=""
    subControlContent=""
	N =N4
	
	'MainObject,SubObject,MainControlを格納した変数mainObjectContentを検索キーとして，それぞれの要素の内容を取り出す．

	patternstring="情報セキュリティ管理項目/MainObjectList[MainObject='" & mainObjectContent & "'" & "]/SubObjectList[SubObject='" & subObjectContent & "'" & "]/MainControlList/SubControlList[" & N4 & "]/SubControl"
	set subControlNode=xmldoc.selectNodes(patternstring)


	'その内容を変数subControlListに格納する．
	if subControlNode.length>0 then
		for j=0 to subControlNode.length-1
			subControlList=subControlList & "<div style='cursor:hand' id='headerID4" & j & "'" & " onclick='subControlGo(" & j & ")'>" & subControlNode(j).text & "</div>"
		next
	else
		subControlMenu.innerHTML="サブコントロールはありません。"
		exit sub
	end if

	'subControlを表示する．
		subControlMenu.innerHTML=subControlList
end sub

sub subControlGo(N5)
	CommentMenu.innerHTML=""

	for k=0 to subControlNode.length-1
		document.all("headerID4" & k).style.backgroundColor="white"
	next
	
	document.all("headerID4" & N5).style.backgroundColor="silver"

	subControlContent=document.all("headerID4" & N5).innerText
	call commentSearch(N5)
end sub

sub commentSearch(N6)
	CommentMenu.innerHTML=""
	CommentNode=""
	CommentList=""

	
	'変数subControlContentを検索キーとして，それぞれの要素の内容を取り出す．

	patternstring="情報セキュリティ管理項目/MainObjectList[MainObject='" & mainObjectContent & "'" & "]/SubObjectList[SubObject='" & subObjectContent & "'" & "]/MainControlList/SubControlList[" & N & "]/CommentList[" & N6 & "]/Comments"
	set CommentNode=xmldoc.selectNodes(patternstring)


	'その内容を変数subControlListに格納する．
	if CommentNode.length>0 then
		for j=0 to CommentNode.length-1
			CommentList=CommentList & "<div>" & CommentNode(j).text & "</div>"
		next
	else
		CommentMenu.innerHTML="コメントはありません" 
		exit sub
	end if

	'Commentを表示する．
		CommentMenu.innerHTML=CommentList 

end sub
]]>
</xsl:comment>
</script>
</head>
<body>
<b style="position:absolute">MainObjectを、クリックして下さい</b>
<div class="frame1" id="mainObjectMenu"></div>
<b style="position:absolute;margin-left:300">SubObjectを､クリックして下さい。</b>
<div class="frame2" id="subObjectMenu">SubObjectが表示されます．</div>
<b style="position:absolute;margin-top:210">MainControlを､クリックして下さい。SubControlが表示されます。</b>
<div class="frame3" id="mainControlMenu">mainControlの内容が表示されます．</div>
<b style="position:absolute;margin-top:390">SubControlを､クリックして下さい。Commentが表示されます。</b>
<div class="frame4" id="subControlMenu">subContorlの内容が表示されます．</div>
<b style="position:absolute;margin-top:560">Comment</b>
<div class="frame5" id="CommentMenu">Commentの内容が表示されます．</div>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
