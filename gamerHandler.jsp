<sql:query var="checkGamer" dataSource="${ds}" sql="SELECT name FROM pokemon_gamers WHERE name=?">
	<sql:param value="${param.addName}" />
</sql:query>

<c:choose>
	<c:when test="${empty checkGamer.rows}">
		<sql:update dataSource="${ds}" sql="INSERT INTO pokemon_gamers(name, college, year, email, friend_code, style) VALUES (?, ?, ?, ?, ?, ?)">
			<sql:param value="${param.addName}" />
			<sql:param value="${param.addCollege}" />
			<sql:param value="${param.addYear}" />
			<sql:param value="${param.addEmail}" />
			<sql:param value="${param.addFriendCode}" />
			<sql:param value="${param.addStyle}" />
		</sql:update>
		<jsp:forward page="pokemon.html" />
	</c:when>
	<c:otherwise>
		<jsp:forward page="pokemon.html?failed=yes" />
	</c:otherwise>
</c:choose>
