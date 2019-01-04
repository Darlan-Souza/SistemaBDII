	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
 	<title>GereCurso</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	
    <body>
		<div class="corpo">
			<div class="menu">
				<h1>Cadastra Professores</h1>
                    <div class="formulario">
     				<form action="cadastraProfessor.php" method="POST">
                         <div>
                              Nome: <input type="text" placeholder="Nome" name="nome_professor">
                         </div><br>

                         <div>
                              Sobrenome: <input type="text" placeholder="Sobrenome" name="sobrenome_professor">
                         </div><br>

                         <div>
                              E-mail: <input type="email" placeholder="E-mail" name="email_professor">
                         </div><br>

                         <div>
                              Data de nascimento: <input type="date" placeholder="Data" name="data_nasc">
                         </div> <br>

                         <div>
                              Rua: <input type="text" placeholder="Rua" name="rua_professor">
                         </div><br>

                         <div>
                              Número: <input type="number" placeholder="Numero" name="numero">
                         </div><br>

                         <div>
                              Cidade: <input type="text" placeholder="Cidade" name="cidade_professor">
                         </div><br>

                         <div>
                          Estado: <select name="estado_professor" placeholder="Estado">
                           <option selected disabled="disabled">Estado</option>
                           <option value="AC">Acre</option>
                           <option value="AL">Alagoas</option>
                           <option value="AP">Amapá</option>
                           <option value="AM">Amazonas</option>
                           <option value="BA">Bahia</option>
                           <option value="CE">Ceará</option>
                           <option value="DF">Distrito Federal</option>
                           <option value="ES">Espírito Santo</option>
                           <option value="GO">Goiás</option>
                           <option value="MA">Maranhão</option>
                           <option value="MT">Mato Grosso</option>
                           <option value="MS">Mato Grosso do Sul</option>
                           <option value="MG">Minas Gerais</option>
                           <option value="PA">Pará</option>
                           <option value="PB">Paraíba</option>
                           <option value="PR">Paraná</option>
                           <option value="PE">Pernambuco</option>
                           <option value="PI">Piauí</option>
                           <option value="RJ">Rio de Janeiro</option>
                           <option value="RN">Rio Grande do Norte</option>
                           <option value="RS">Rio Grande do Sul</option>
                           <option value="RO">Rondônia</option>
                           <option value="RR">Roraima</option>
                           <option value="SC">Santa Catarina</option>
                           <option value="SP">São Paulo</option>
                           <option value="SE">Sergipe</option>
                           <option value="TO">Tocantins</option>
                          </select>
                         </div><br>

                         <div>
                              Salario: <input type="number" placeholder="Salario" name="salario">
                         </div><br>

                         <input type="submit" value="Registrar Aluno">
                    </div>
                </form>
			</div>
		</div>
	</body>
	</html>