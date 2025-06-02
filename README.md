<h1>Modulo Gratuito PIX Seja Efi WHMCS Brasil</h1>

<p><h2>Criação da Conta</h2></p>
<p>Abrir Conta no Banco SejaEfi https://sejaefi.com.br/parceiro/desenvolve-facil/</p>

<p><h2>Certificado para utilização da API PIX</h2></p>
<p>Todas as requisições devem conter um certificado de segurança que será fornecido pela Efí dentro da sua conta, no formato PFX(.p12). Essa exigência está descrita na integra no manual de segurança do PIX(https://www.bcb.gov.br/estabilidadefinanceira/comunicacaodados).
<br />
Caso ainda não tenha seu certificado, basta seguir o passo a passo do link a seguir para gerar um novo: https://gerencianet.com.br/artigo/como-gerar-o-certificado-para-usar-a-api-pix/</p>

<p><h2>Converter Certificado .p12 para .pem </h2></p>
<p>Para utilizar o modulo o certificado deverá ser convertido para o padrão <b>.pem</b></p>
<p>https://github.com/efipay/conversor-p12-efi</p>
 
<p><h2>Instalação do Modulo</h2></p>
<ol>
 <li>Faça download e descompacte dentro da pasta /modules/gateways/ de seu Whmcs.</li>
 <li>Entre em: Portais de Pagamento e ative o modulo <b>Sejaefipixdfx</b>.</li>
</ol>

<p><h2>Configuração do Modulo</h2></p>
<ol>
 <li><b>Em Produção:</b> Define se irá realizar cobranças reais (*em modo teste faturas de 1.00 a 9.00 tem retorno automatico)</li>
 <li><b>Chave Pix:</b> Coloque sua Chave Pix CPF/CNPJ | Telefone | Email | Chave Aleátoria(*recomendada)</li>
 <li><b>Client_Id Produção:</b> Deve ser preenchido com o client_id de produção de sua conta Efí. Este campo é obrigatório e pode ser encontrado no menu "API" -> "Aplicações"</li>
 <li><b>Client_Secret Produção:</b> Deve ser preenchido com o client_secret de produção de sua conta Efí. Este campo é obrigatório e pode ser encontrado no menu "API" -> "Aplicações"</li>
 <li><b>Caminho do Certificado de Produção:</b> Caminho fisico para o certificado no servidor. (Ex: /home/sopedir.app/public_html/certificadosejaefi/producao-634294-testewhmcs_cert.pem)</li>

 <li><b>Client_Id Sandbox (Modo Teste):</b> Deve ser preenchido com o client_id de produção de sua conta Efí. Este campo é obrigatório e pode ser encontrado no menu "API" -> "Aplicações"</li>
 <li><b>Client_Secret Sandbox (Modo Teste):</b> Deve ser preenchido com o client_secret de produção de sua conta Efí. Este campo é obrigatório e pode ser encontrado no menu "API" -> "Aplicações"</li>
 <li><b>Caminho do Certificado de Sandbox (Modo Teste):</b> Caminho fisico para o certificado no servidor. (Ex: /home/sopedir.app/public_html/certificadosejaefi/homologacao-634294-testewhmcs_cert.pem)</li>
</ol>


<p><h2>Enviar QrCode por Email</h2></p>
<p>Basta colcar o comando abaixo nos modelos de email para que o QrCode Pix seja enviado<br />
</p>
<code>{if $invoice_payment_method=="Pix Seja Efi"}{$invoice_payment_link}{/if}</code>

<p/>
<h3>Sugestões, Dúvidas?</h3>
<p>Entrem em contato em: <a href="https://desenvolvefacil.com.br">https://desenvolvefacil.com.br</a></p>
<p/>
