# MeusPostosAPI
Conjunto de bibliotecas para facilitar a conexão com a API do projeto Meus Postos - preços atualizados de venda de combustíveis no Brasil
## Métodos
### Saiba como utilizar nossas API

Abaixo você vai poder conhecer todas as interfaces disponíveis para interagir com os dados do projeto Meus Postos. Não se esqueça que para utilizar a API você deve primeiro autenticar seus pedidos (saiba mais sobre autenticação)


<h2 class="subtitulo">Região Metropolitana</h2>
<p>Retorna a lista de todas as regiões metropolitanas brasileiras e as respectivas cidades que fazem parte do projeto MeusPostos</p>
<ul class="bullets">
   <li><b>URL</b>: http://api.meuspostos.com.br/regioes.<b><i>formato</i></b></li>
   <li><b>Formato</b>: <b>json</b> ou <b>xml</b></li>
   <li><b>Parâmetros</b>: nenhum</li>
   <li><b>Retorno</b>:</li>
</ul>
<table class="Tabela" align=center id='tableComparativo' cellpadding=0 cellspacing=0>
   <tr>
      <th style="width:200px; vertical-align:middle;">Campo</th>
      <th style="width:500px">Descrição</th>
   </tr>
   <tr>
      <td style="text-align:left;"><span style="margin-left:0px">data</span></td>
      <td style="text-align:left;" class="normal"> Nó raiz onde todos as respostas são vinculadas</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">regioes</span></td>
      <td style="text-align:left;" class="normal">Agrupamento de regiões</td>
   </tr>   
   <tr>
      <td style="text-align:left;"><span style="margin-left:40px">cd_regiao</span></td>
      <td style="text-align:left;" class="normal">Código da região na API MeusPostos</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:40px">nome</span></td>
      <td style="text-align:left;" class="normal">Nome da Região Metropolitana</td>
   </tr>     
   <tr>
      <td style="text-align:left;"><span style="margin-left:40px">nome_tela</span></td>
      <td style="text-align:left;" class="normal">Nome formatado da Região Metropolitana</td>
   </tr>     
   <tr class="LinhaImpar" >                                             
      <td style="text-align:left;"><span style="margin-left:40px">cd_cidade_sede</span></td>
      <td style="text-align:left;" class="normal">Código da cidade sede da região metropolitana na API</td>
   </tr>     
   <tr>
      <td style="text-align:left;"><span style="margin-left:40px">nome_cidade_sede</span></td>
      <td style="text-align:left;" class="normal">Nome da cidade sede</td>
   </tr>     
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:40px">cidades</span></td>
      <td style="text-align:left;" class="normal">Agrupamento de cidades pertencentes a região metropolitana</td>
   </tr>     
   <tr>
      <td style="text-align:left;"><span style="margin-left:60px">cd_cidade</span></td>
      <td style="text-align:left;" class="normal">Código da cidade na API MeusPostos</td>
   </tr>     
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:60px">nome</span></td>
      <td style="text-align:left;" class="normal">Nome da cidade</td>
   </tr>  
   <tr>
      <td style="text-align:left;"><span style="margin-left:60px">nome_tela</span></td>
      <td style="text-align:left;" class="normal">Nome formatado da cidade</td>
   </tr>     
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:60px">estado</span></td>
      <td style="text-align:left;" class="normal">UF a que pertence a cidade</td>
   </tr>  
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">status</span></td>
      <td style="text-align:left;" class="normal">Código HTTP da resposta ao pedido</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">detail</span></td>
      <td style="text-align:left;" class="normal">Detalhes do código de status.</td>
   </tr>  
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">resquest_uri</span></td>
      <td style="text-align:left;" class="normal">URI, com parâmetros, que originou  a resposta. </td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">created_at</span></td>
      <td style="text-align:left;" class="normal">Hora em que foi gerado o pedido</td>
   </tr>  
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">elapsed_time</span></td>
      <td style="text-align:left;" class="normal">Tempo para gerar o pedido</td>
   </tr>                          
</table>

<br><br>
<!-- Cidades -->
<h2 class="subtitulo">Cidades</h2>
<p>Retorna a lista de todas as cidades que fazem parte do projeto MeusPostos</p>
<ul class="bullets">
   <li><b>URL</b>: http://api.meuspostos.com.br/cidades.<b><i>formato</i></b></li>
   <li><b>Formato</b>: <b>json</b> ou <b>xml</b></li>
   <li><b>Parâmetros</b>: 
   <ul class="bullets">
      <li><b>grupo (opcional)</b>: 0 (padrão) para listar todas as cidades, 1 para listar cidades que pertecem a região metropolitana e 2 para listar apenas cidades sede de região metropolitana</li>
      <li><b>UF (opcional)</b>: silga da Unidade da Federeção. Mostra apenas cidades pertencentes aquela unidade.</li>
   </ul>
   </li>      
   <li><b>Retorno</b>:</li>
</ul>
<table class="Tabela" align=center id='tableComparativo' cellpadding=0 cellspacing=0>
   <tr>
      <th style="width:200px; vertical-align:middle;">Campo</th>
      <th style="width:500px">Descrição</th>
   </tr>
   <tr>
      <td style="text-align:left;"><span style="margin-left:0px">data</span></td>
      <td style="text-align:left;" class="normal"> Nó raiz onde todos as respostas são vinculadas</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">cidades</span></td>
      <td style="text-align:left;" class="normal">Agrupamento de cidades</td>
   </tr>   
   <tr>
      <td style="text-align:left;"><span style="margin-left:40px">cd_cidade</span></td>
      <td style="text-align:left;" class="normal">Código da cidade na API MeusPostos</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:40px">nome</span></td>
      <td style="text-align:left;" class="normal">Nome da cidade</td>
   </tr>  
   <tr>
      <td style="text-align:left;"><span style="margin-left:40px">nome_tela</span></td>
      <td style="text-align:left;" class="normal">Nome formatado da cidade</td>
   </tr>     
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:40px">estado</span></td>
      <td style="text-align:left;" class="normal">UF a que pertence a cidade</td>
   </tr>     
   <tr>
      <td style="text-align:left;"><span style="margin-left:40px">cd_regiao</span></td>
      <td style="text-align:left;" class="normal">Código da região na API MeusPostos. 0 para cidades que nao pertecem a região metropolitana.</td>
   </tr>  
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:40px">nome_regiao</span></td>
      <td style="text-align:left;" class="normal">Nome da região metropolitana que a cidade faz parte. Vazio para cidades que não pertecem a região metropoliana.</td>
   </tr>            
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">status</span></td>
      <td style="text-align:left;" class="normal">Código HTTP da resposta ao pedido</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">detail</span></td>
      <td style="text-align:left;" class="normal">Detalhes do código de status.</td>
   </tr>  
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">resquest_uri</span></td>
      <td style="text-align:left;" class="normal">URI, com parâmetros, que originou  a resposta. </td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">created_at</span></td>
      <td style="text-align:left;" class="normal">Hora em que foi gerado o pedido</td>
   </tr>  
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">elapsed_time</span></td>
      <td style="text-align:left;" class="normal">Tempo para gerar o pedido</td>
   </tr>                          
</table>


<br><br>
<!-- Bairros -->
<h2 class="subtitulo">Bairros</h2>
<p>Retorna a lista dos bairros de uma cidade especifica</p>
<ul class="bullets">
   <li><b>URL</b>: http://api.meuspostos.com.br/bairros.<b><i>formato</i></b></li>
   <li><b>Formato</b>: <b>json</b> ou <b>xml</b></li>
   <li><b>Parâmetros</b>: 
   <ul class="bullets">
      <li><b>cidade (obrigatório)</b>: Código da cidade que terão os bairros listados.</li>
   </ul>
   </li>      
   <li><b>Retorno</b>:</li>
</ul>
<table class="Tabela" align=center id='tableComparativo' cellpadding=0 cellspacing=0>
   <tr>
      <th style="width:200px; vertical-align:middle;">Campo</th>
      <th style="width:500px">Descrição</th>
   </tr>
   <tr>
      <td style="text-align:left;"><span style="margin-left:0px">data</span></td>
      <td style="text-align:left;" class="normal"> Nó raiz onde todos as respostas são vinculadas</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">bairros</span></td>
      <td style="text-align:left;" class="normal">Agrupamento de bairros</td>
   </tr>   
   <tr>
      <td style="text-align:left;"><span style="margin-left:40px">nome</span></td>
      <td style="text-align:left;" class="normal">nome do bairro</td>
   </tr>
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:20px">status</span></td>
      <td style="text-align:left;" class="normal">Código HTTP da resposta ao pedido</td>
   </tr>
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">detail</span></td>
      <td style="text-align:left;" class="normal">Detalhes do código de status.</td>
   </tr>  
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">resquest_uri</span></td>
      <td style="text-align:left;" class="normal">URI, com parâmetros, que originou  a resposta. </td>
   </tr>
   <tr>
      <td style="text-align:left;"><span style="margin-left:20px">created_at</span></td>
      <td style="text-align:left;" class="normal">Hora em que foi gerado o pedido</td>
   </tr>  
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">elapsed_time</span></td>
      <td style="text-align:left;" class="normal">Tempo para gerar o pedido</td>
   </tr>                          
</table>

<br><br>
<!-- Busca -->
<h2 class="subtitulo">Busca</h2>
<p>Efetua uma busca por estabelecimentos no banco de dados do projeto</p>
<ul class="bullets">
   <li><b>URL</b>: http://api.meuspostos.com.br/busca.<b><i>formato</i></b></li>
   <li><b>Formato</b>: <b>json</b> ou <b>xml</b></li>
   <li><b>Parâmetros</b>: 
   <ul class="bullets">
      <li><b>chave</b>: palavra-chave para buscar o estabelecimento. Pode ser parte do nome ou parte do endereço conforme registro (não busca por aproximação do endereço. Para isso veja utilize uma ferramenta de geolocalização como o google maps para converter endereço em coordenadas geográficas).<b>Obrigatório na ausência de lat e lon</b>.</li>
      <li><b>lat</b>: Valor da latitude de referência para efetuar a busca. <b>Obrigatório na ausência de palavra-chave.</b></li>
      <li><b>lon</b>: Valor da longitude de referência para efetuar a busca. <b>Obrigatório na ausência de palavra-chave.</b></li>
      <li><b>ordem</b>: Opção para ordenação dos resultados: <b>0 (padrão) - Distância da coordenada de referência</b>, 1 - Preço da Gasolina, 2 - Preço do Alcool, 3 - Preço do Diesel, 4 - Preço do GNV, 5 - Nome do Estabelecimento</li>
      <li><b>Cidade</b>: Código da cidade que deseja restringir a pesquisa</li>
      <li><b>Bairro</b>: Nome do bairro que deseja restringir a pesquisa</li>
      
   </ul>
   </li>      
   <li><b>Retorno</b>:</li>
</ul>
<table class="Tabela" align=center id='tableComparativo' cellpadding=0 cellspacing=0>
   <tr>
      <th style="width:200px; vertical-align:middle;">Campo</th>
      <th style="width:500px">Descrição</th>
   </tr>
   <tr>
      <td style="text-align:left;"><span style="margin-left:0px">data</span></td>
      <td style="text-align:left;" class="normal"> Nó raiz onde todos as respostas são vinculadas</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">postos</span></td>
      <td style="text-align:left;" class="normal">Agrupamento de postos</td>
   </tr>   
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">posto</span></td>
      <td style="text-align:left;" class="normal">Código do posto na API MeusPostos.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">nome</span></td>
      <td style="text-align:left;" class="normal">nome do estabelecimento</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">endereco</span></td>
      <td style="text-align:left;" class="normal">Endereço do estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">bairro</span></td>
      <td style="text-align:left;" class="normal">Bairro onde o estabelecimento está localizado</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">dt_pesquisa</span></td>
      <td style="text-align:left;" class="normal">Data de quando os dados foram atualizados pela ANP.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">bandeira</span></td>
      <td style="text-align:left;" class="normal">Nome da bandeira do estabelecimento (ex. Shell, Petrobras, Texaco, Ipiranga)</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">icone</span></td>
      <td style="text-align:left;" class="normal">Endereço no site do projeto para o logo da bandeira do estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">gasolina</span></td>
      <td style="text-align:left;" class="normal">Preço de venda da gasolina (0.000 quando não tiver informação ou não comercializar).</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">in_gasolina</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">alcool</span></td>
      <td style="text-align:left;" class="normal">Preço de venda do álcool (0.000 quando não tiver informação ou não comercializar).</td>
   </tr>
   <tr class="LinhaPar">                                       
      <td style="text-align:left;"><span style="margin-left:40px">in_alcool</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">diesel</span></td>
      <td style="text-align:left;" class="normal">Preço de venda do diesel (0.000 quando não tiver informação ou não comercializar).</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">in_diesel</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">gnv</span></td>
      <td style="text-align:left;" class="normal">Preço de venda do G.N.V. (0.000 quando não tiver informação ou não comercializar)</td>
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">in_gnv</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">latitude</span></td>
      <td style="text-align:left;" class="normal">Latitude da localização do estabelecimento.</td>
   </tr>
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">longitude</span></td>
      <td style="text-align:left;" class="normal">Longitude da localização do estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">distancia</span></td>
      <td style="text-align:left;" class="normal">Distância (em linha reta) do ponto de referência.</td>
   </tr>     
   <tr class="LinhaPar">
      <td style="text-align:left;"><span style="margin-left:20px">status</span></td>
      <td style="text-align:left;" class="normal">Código HTTP da resposta ao pedido</td>
   </tr>
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:20px">detail</span></td>
      <td style="text-align:left;" class="normal">Detalhes do código de status.</td>
   </tr>  
   <tr class="LinhaPar" >
      <td style="text-align:left;"><span style="margin-left:20px">resquest_uri</span></td>
      <td style="text-align:left;" class="normal">URI, com parâmetros, que originou  a resposta. </td>
   </tr>
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:20px">created_at</span></td>
      <td style="text-align:left;" class="normal">Hora em que foi gerado o pedido</td>
   </tr>  
   <tr class="LinhaPar" >
      <td style="text-align:left;"><span style="margin-left:20px">elapsed_time</span></td>
      <td style="text-align:left;" class="normal">Tempo para gerar o pedido</td>
   </tr>                          
</table>

<br><br>
<!-- Posto -->
<h2 class="subtitulo">Busca</h2>
<p>Retorna detalhes sobre um estabelecimento</p>
<ul class="bullets">
   <li><b>URL</b>: http://api.meuspostos.com.br/posto.<b><i>formato</i></b></li>
   <li><b>Formato</b>: <b>json</b> ou <b>xml</b></li>
   <li><b>Parâmetros</b>: 
   <ul class="bullets">
      <li><b>posto (obrigatório)</b>: Código do posto na API MeusPostos.</li>
   </ul>
   </li>      
   <li><b>Retorno</b>:</li>
</ul>
<table class="Tabela" align=center id='tableComparativo' cellpadding=0 cellspacing=0>
   <tr>
      <th style="width:200px; vertical-align:middle;">Campo</th>
      <th style="width:500px">Descrição</th>
   </tr>
   <tr>
      <td style="text-align:left;"><span style="margin-left:0px">data</span></td>
      <td style="text-align:left;" class="normal"> Nó raiz onde todos as respostas são vinculadas</td>
   </tr>
   <tr class="LinhaImpar" >
      <td style="text-align:left;"><span style="margin-left:20px">postos</span></td>
      <td style="text-align:left;" class="normal">Agrupamento de postos</td>
   </tr>   
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">posto</span></td>
      <td style="text-align:left;" class="normal">Código do posto na API MeusPostos.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">nome</span></td>
      <td style="text-align:left;" class="normal">nome do estabelecimento</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">endereco</span></td>
      <td style="text-align:left;" class="normal">Endereço do estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">bairro</span></td>
      <td style="text-align:left;" class="normal">Bairro onde o estabelecimento está localizado</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">dt_pesquisa</span></td>
      <td style="text-align:left;" class="normal">Data de quando os dados foram atualizados pela ANP.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">bandeira</span></td>
      <td style="text-align:left;" class="normal">Nome da bandeira do estabelecimento (ex. Shell, Petrobras, Texaco, Ipiranga)</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">icone</span></td>
      <td style="text-align:left;" class="normal">Endereço no site do projeto para o logo da bandeira do estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">gasolina</span></td>
      <td style="text-align:left;" class="normal">Preço de venda da gasolina (0.000 quando não tiver informação ou não comercializar).</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">in_gasolina</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">alcool</span></td>
      <td style="text-align:left;" class="normal">Preço de venda do álcool (0.000 quando não tiver informação ou não comercializar).</td>
   </tr>
   <tr class="LinhaPar">                                       
      <td style="text-align:left;"><span style="margin-left:40px">in_alcool</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">diesel</span></td>
      <td style="text-align:left;" class="normal">Preço de venda do diesel (0.000 quando não tiver informação ou não comercializar).</td>
   </tr>
   <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">in_diesel</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">gnv</span></td>
      <td style="text-align:left;" class="normal">Preço de venda do G.N.V. (0.000 quando não tiver informação ou não comercializar)</td>
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">in_gnv</span></td>
      <td style="text-align:left;" class="normal">Indicador da ANP para comprovação da nota fiscal dacompra de combustível (1 entregou, 0 não entregou).</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">latitude</span></td>
      <td style="text-align:left;" class="normal">Latitude da localização do estabelecimento.</td>
   </tr>
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">longitude</span></td>
      <td style="text-align:left;" class="normal">Longitude da localização do estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">distancia</span></td>
      <td style="text-align:left;" class="normal">Distância (em linha reta) do ponto de referência.</td>
   </tr>     
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">Telefone</span></td>
      <td style="text-align:left;" class="normal">Telefone do estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">qt_nota1</span></td>
      <td style="text-align:left;" class="normal">Quantidade de clientes que derão nota 1 de 5 para o estabelecimento.</td>
   </tr>     
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">qt_nota2</span></td>
      <td style="text-align:left;" class="normal">Quantidade de clientes que derão nota 2 de 5 para o estabelecimento.</td>
   </tr>   
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">qt_nota3</span></td>
      <td style="text-align:left;" class="normal">Quantidade de clientes que derão nota 3 de 5 para o estabelecimento.</td>
   </tr>     
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">qt_nota4</span></td>
      <td style="text-align:left;" class="normal">Quantidade de clientes que derão nota 4 de 5 para o estabelecimento.</td>
   </tr>  
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:40px">qt_nota5</span></td>
      <td style="text-align:left;" class="normal">Quantidade de clientes que derão nota 5 de 5 para o estabelecimento.</td>
   </tr>     
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:40px">comentarios</span></td>
      <td style="text-align:left;" class="normal">Agrupamento de comentários recebidos.</td>
   </tr>        
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:60px">data</span></td>
      <td style="text-align:left;" class="normal">Data em que o comentário foi escrito.</td>
   </tr>     
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:60px">hora</span></td>
      <td style="text-align:left;" class="normal">Hora em que o comentário foi escrito.</td>
   </tr>        
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:60px">nome</span></td>
      <td style="text-align:left;" class="normal">Nome da pessoa que escreveu o comentário.</td>
   </tr>
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:60px">avatar</span></td>
      <td style="text-align:left;" class="normal">Imagem associada ao autor do comentário.</td>
   </tr>        
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:60px">app</span></td>
      <td style="text-align:left;" class="normal">Código do aplicativo que submenteu o comentário para o site (ex.: Orkut, Facebook, etc).</td>
   </tr>     
   </tr>
      <tr class="LinhaPar">                                         
      <td style="text-align:left;"><span style="margin-left:60px">corpo</span></td>
      <td style="text-align:left;" class="normal">Texto do comentário.</td>
   </tr>        
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:60px">in_proprietario</span></td>
      <td style="text-align:left;" class="normal">Indicador se o comentario é do responsável pelo estabelecimento.</td>
   </tr>                
   <tr class="LinhaPar">
      <td style="text-align:left;"><span style="margin-left:20px">status</span></td>
      <td style="text-align:left;" class="normal">Código HTTP da resposta ao pedido</td>
   </tr>
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:20px">detail</span></td>
      <td style="text-align:left;" class="normal">Detalhes do código de status.</td>
   </tr>  
   <tr class="LinhaPar" >
      <td style="text-align:left;"><span style="margin-left:20px">resquest_uri</span></td>
      <td style="text-align:left;" class="normal">URI, com parâmetros, que originou  a resposta. </td>
   </tr>
   <tr class="LinhaImpar">
      <td style="text-align:left;"><span style="margin-left:20px">created_at</span></td>
      <td style="text-align:left;" class="normal">Hora em que foi gerado o pedido</td>
   </tr>  
   <tr class="LinhaPar" >
      <td style="text-align:left;"><span style="margin-left:20px">elapsed_time</span></td>
      <td style="text-align:left;" class="normal">Tempo para gerar o pedido</td>
   </tr>                          
</table>                                                                                
              
