## Desafio PHP - PBsoft 

<b>Descrição:</b>
O cliente precisa controlar o estoque de produtos de um e-commerce, foi solicitado
um sistema WEB que controle esse fluxo e os endpoints REST para que no futuro
seja feito um app.

<b>Desafio:</b> Criar um CRUD de produtos, o produto deve ter NOME, DESCRIÇÃO, CATEGORIA,
PREÇO e QUANTIDADE. A listagem, cadastro, atualização e exclusão devem poder
ser realizadas via REST API.


## Instalação

- Instale um servidor PHP, como o <b>Xampp</b> ou <b>Wamp</b>. 
- Em seguida instale o gerenciador de dependências <b>Composer</b>, para instalar o <b>Laravel</b>.
- Baixe o repositório do GitHub, em seguida transfira o mesmo para pasta de execução no servidor PHP (Xampp: htdocs | Wamp64: www)
- Renomei os parâmetros do banco de dados no arquivo .env
- Parâmetros do banco:

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=bd_produtos<br>
DB_USERNAME=root<br>
DB_PASSWORD=

- Em seguida, execute o PhpMyAdmin para exportar o SQL do backup do banco (backup.sql) localizado no diretório da solução.
- URL de execução principal: http://127.0.0.1/crud-produtos/public/produtos ou http://localhost/crud-produtos/public/produtos

## API Rest - Rotas

- As rotas da API rest estão localizadas no arquivo api.php (Routes/api.php) <br>
<b>Execução de requisições API:</b> Instale um API Client como <b>Postman</b> ou <b>Insomnia</b> para testar as requisições da API</b>

// Rota de inserção de produtos no banco <br>
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/add <br>
Route::post('/produtos/add',  [ProdutoController::class, 'add']);

// Rota de listagem total de produtos no banco <br>
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/list <br>
Route::get('/produtos/list',  [ProdutoController::class, 'list']);

// Rota de select de produtos no banco (Na URL digite o nome do ID do produto que deseja consultar) <br>
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/ <br>
Route::get('/produtos/select/{id}',  [ProdutoController::class, 'select']);

// Rota de alteração de produtos no banco (Na URL digite o nome do ID do produto que deseja alterar) <br>
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/ <br>
Route::put('/produtos/update/{id}',  [ProdutoController::class, 'update']);

// Rota de exclusão de produto no banco (Na URL digite o nome do ID do produto que deseja excluir) <br>
// URL: http://127.0.0.1/crud-produtos/public/api/produtos/delete <br>
Route::delete('/produtos/delete/{id}',  [ProdutoController::class, 'delete']);
