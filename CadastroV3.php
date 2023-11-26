<html><head>
    <meta charset="utf-8"/>
    <title> Cadastro</title>
    <link rel="stylesheet" type="text/css" href="FormularioV2.css"/>
    <link rel="stylesheet" type="text/css" href="campocontato.css"/>
    <link rel="stylesheet" type="text/css" href="camposexo.css"/>
    <link rel="stylesheet" type="text/css" href="botoes.css"/>
    <link rel="stylesheet" type="text/css" href="bloco_selecao.css"/>
    <link rel="stylesheet" type="text/css" href="corpo_sistema.css"/>
    <link rel="stylesheet" type="text/css" href="barrasuperior.css"/>
</head>
<body>
<div id="link">
<!--<b>Usuário:</b>-->
<b>Data Sistema: 
    <?php
        $hoje = date('d/m/Y');
        echo $hoje;
    ?>
    </b>
<a href="http://localhost/loginV2.php">Sair</a>
</div>
    <!--Script para proteção de dados-->
    <!--FIM SCRIPT-->

    <div class="corpo_sistema">
    <div id="formulariov2">
    <form action="recebe_formulario.php" method="POST">
        <legend>Cadastro de Funcionario</legend></br>
        <!--<img src="" class="d_imgcadastro"/>-->
<p><b>Informações Pessoais</b></p>
        <label>Nome:</label><input class="d_campotext" type="text" name="dnome" required="required"/>
        <label>Idade:</label><input class="d_campotext_idade" type="text" name="didade"/>
        <label>E-mail:</label><input class="d_campotext" type="email" name="demail"/>
        <label>Celular:</label>
        <!--DDD--><input class="d_campotext_ddd" type="tel" required placeholder="(DDD)" name="dcel_ddd"/>
        <input class="d_campotel" type="tel" required placeholder="00000-0000" name="dcel"/></br>
        <label>Telefone:
         <!--DDD--><input class="d_campotext_ddd" type="tel" required placeholder="(DDD)" name="dtel_ddd"/>   
        </label><input class="d_campotel" type="tel" required placeholder="0000-0000" name="dtel"/>
        <label>Data de Nascimento:</label><input class="dtnasc" type="date" name="dtnasc"/>
        <div id="bloco_select">
        <label>Sexo:</label>
            <select name="d_sex" required="required">
                <option value="">...</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
            <label>Nr.Depend.</label>
            <select name="d_depend">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div id="bloco_select">
            <label>Estado Cívil:</label>
            <select name="d_statusciv" required="required">
                    <option value="">Selecionar...</option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                    <option value="Estável">Uni.Estável</option>
            </select>
            <label>Cor:</label>
        <select name="raca">
            <option value="...">...</option>
            <option value="Negro">Negro</option>
            <option value="Pardo">Pardo</option>
            <option value="Branco">Branco</option>
        </select>
        <label>Tp. Documento:</label>
        <select name="ddoc">
            <option value="">...</option>
            <option value="RG">RG</option>
            <option value="CPF">CPF</option>
            <option value="CNH">CNH</option>
        </select>
        <input class="d_campotext" type="text" name="nrdoc" required placeholder="número do documento"/>
    </br>
    <label>Nome da Mãe:</label><input type="text" class="d_campotext" name="d_mae" />
    <label>Nome do Pai:</label><input type="text" class="d_campotext" name="d_mae" />
</br>
</br>
<p><b>Endereço</b></p>
        <label>CEP:</label><input class="d_campocep" type="text" name="d_cep" required placeholder="00000-000"/>
        <label>Endereço:</label><input class="d_campotext" type="text" name="d_end"/>
        <label>Nr.</label><input type="text" class="d_nrresi" name="d_nrresi"/>
             <label>Cidade:</label>
        <select name="Dcid">
            <option value="">...</option>
            <option value="São Paulo">São Paulo</option>
        </select>
        <label>UF:</label>
            <select name="duf">
                <option value="">...</option>
                <option value="SP">SP</option>
            </select>
    </div>
</br>
<p><b>Dado Profissional</b></p>
    <label>Data de Admissão:</label><input class="dtadm" type="date" name="dtadm"/>
    <label>Cargo:</label><input class="d_campotext" name="d_cargo"/>
    <label>Nome da Empresa:</label><input class="d_campotext" type="text" name="d_nomeempr"/></br></br>
    <label>CNPJ da Empresa:</label><input class="d_campotext" type="text" name="d_cnpjempr" required placeholder="XX. XXX. XXX/0001-XX" />
        <label>Renda:</label><input class="drenda" type="text" name="drenda" required placeholder="0,00"/></br></br>
            <div id="botoes">
                <!--<input class="d_botoes" type="submit" value="Cancelar"/>-->
<p><b>Escolaridade</b></p>
<div id="bloco_select">
    <label>Nível de instrução:</label>
    <select name="D_escol">
        <option value=""><i>Selecionar...</i></option>
        <option value="Pós-Graduação">Pós-Graduação</option>
        <option value="Ensino Superio Completo">Ensino Superio Completo</option>
        <option value="Ensino Superio Incompleto">Ensino Superio Incompleto</option>
        <option value="Ensino Médio Completo">Ensino Médio Completo</option>
        <option value="Ensino Médio Incompleto">Ensino Médio Incompleto</option>
        <option value="Ensino Fundamental">Ensino Ensino Fundamental</option>
    </select>
    </div>
</br>
</br>
    <p><b>Dados Complementares</b></p>
    <label>Observações:</label><br>
    
        <textarea class="d_campodescr" name="d_descr_cad"></textarea>
            <br>
                <input class="d_botoes_canc" type="submit" value="Cancelar"/> 
                <input class="d_botoes" type="submit" value="Enviar"/>
            </div>
    </form>
</div>
</div>
</body>
</html>