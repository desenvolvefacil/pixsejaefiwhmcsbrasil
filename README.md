<h1>Modulo Gratuito PIX Seja Efi WHMCS Brasil</h1>

<p><h2>Criação da Conta</h2></p>
<p><a href="https://sejaefi.com.br/parceiro/desenvolve-facil/">Abrir Conta no SejaEfi</a></p>

<p><h2>Certificado para utilização da API PIX</h2></p>
<p>Todas as requisições devem conter um certificado de segurança que será fornecido pela Efí dentro da sua conta, no formato PFX(.p12). Essa exigência está descrita na integra no manual de segurança do PIX(https://www.bcb.gov.br/estabilidadefinanceira/comunicacaodados).
<br />
Caso ainda não tenha seu certificado, basta seguir o passo a passo do link a seguir para gerar um novo: https://gerencianet.com.br/artigo/como-gerar-o-certificado-para-usar-a-api-pix/</p>

 
<p><h2>Instalação do Modulo</h2></p>
<ol>
 <li>Faça download e descompacte dentro da pasta /modules/gateways/ de seu Whmcs.</li>
 <li>Entre em: Portais de Pagamento e ative o modulo <b>Sejaefipixdfx</b>.</li>
</ol>

<p><b>Não utilizar caracteres especiais no prefixo, utilizem apenas letras.</b></p>
<p/>
<p>Faça download e descompacte dentro da pasta /modules/gateways/ de seu Whmcs.</p>
<p>Entre em: Portais de Pagamento e ative o modulo <b>Sejaefipixdfx</b>.</p>
<p>Entre com sua Chave Pix, Seu Nome e sua Cidade.</p>
<p>Caso utilize o Pix em outros sites e sistemas configure um código de prefixo para diferenciar as transações recebidas.</p>
<p>Para enviar Código PIX por email basta colar o código abaixo no modelo de email</p>
<p/>
<p>{if $invoice_payment_method=="Pix Seja Efi"}{$invoice_payment_link}{/if}</p>
<p/>
<p/>

<p/>
<h3>Sugestões, Dúvidas?</h3>
<p>Entrem em contato em: <a href="https://desenvolvefacil.com.br">https://desenvolvefacil.com.br</a></p>
<p/>
