<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

Nome: <%=request.getParameter("nome")%><br>
Data de nascimento: <%=request.getParameter("dataDascimento")%><br>
E-mail: <%=request.getParameter("email")%><br>
Tel. Celular: <%=request.getParameter("celular")%><br>
Endereço: <%=request.getParameter("endereco")%><br>
Numero: <%=request.getParameter("numero")%><br>
Complemento: <%=request.getParameter("complemento")%><br>
Bairro: <%=request.getParameter("bairro")%><br>
CEP: <%=request.getParameter("cep")%><br>
Cidade: <%=request.getParameter("cidade")%><br>
Estado: <%=request.getParameter("estado")%><br>
Nacionalidade: <%=request.getParameter("nacionalidade")%><br>
Naturalidade: <%=request.getParameter("naturalidade")%><br>
Histórico Escolar: <%=request.getParameter("historico")%><br>
Palestra/Oficina/Curso: <%=request.getParameter("poc")%><br>
Hora: <%=request.getParameter("hora")%><br>
<br><br>
CADASTRO REALIZADO!!!
</body>
</html>