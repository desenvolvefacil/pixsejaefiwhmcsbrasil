
<?php

require_once __DIR__ . '/../../../init.php';
require_once __DIR__ . '/../../../includes/gatewayfunctions.php';
require_once __DIR__ . '/../../../includes/invoicefunctions.php';

// Detect module name from filename.
$gatewayModuleName = basename(__FILE__, '.php');

// Fetch gateway configuration parameters.
$gatewayParams = getGatewayVariables($gatewayModuleName);



function resposta($status, $mensagem, $dados) {
    $resposta['status'] = $status;
    $resposta['mensagem'] = $mensagem;
    $resposta['dados'] = $dados;

    //$json_resposta = '<pre>' . json_encode($resposta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';
    $json_resposta = json_encode($resposta, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);


    header("HTTP/1.1 " . $status);
    echo $json_resposta;
}

function salvar($dados) {
    //se for teste do webhook
    //if ($dados["evento"] == "teste_webhook") {
        
    //} else {
        
        
        /*         * salva arquivo de log */
        /*
        $datahora = date("Y-m-d_H-i-s");
        $file = "arquivos/" . $datahora . ".txt";

        //$file = "2023-01-05_17-32-00.txt";

        $myfile = fopen($file, "w");

        fwrite($myfile, json_encode($dados));

        fclose($myfile);
        */
        
        
        /*         * fim salva arquivo de log */

        $endToEndId = $dados["pix"][0]["endToEndId"];
        $txid = $dados["pix"][0]["txid"];
        $valor = $dados["pix"][0]["valor"];
        //$horario = $dados["pix"][0]["horario"];
        $horario = $datahora;
        $tarifa = $dados["pix"][0]["gnExtras"]["tarifa"];
        //$tarifa = ($valor * (1.19))/100;

        //remove o DFW do txid
        $txid = str_ireplace("DFW", "", $txid);
        $txid = intval($txid);

        //$dados["teste"] = $txid;
        
        //json_encode($txid);exit;
        
        //$endToEndId = $dados;

        /*
        $datahora = date("Y-m-d_H-i-s");
        $file = $datahora . ".txt";
          if (fwrite($arquivo, $json )) {
          resposta(200, "Arquivo Salvo com Sucesso!", $dados);
          } else {
          resposta(300, "Falha ao salvar os dados da requisição.", $dados);
          }

          fclose($arquivo);
         */
         


        /*
         * 
         * 
         * da baixa no pagamento e valida no banco de dados|sistema 

         * 
         * */
         
        //$gatewayParams = getGatewayVariables($gatewayModuleName);
         
        //$success = $_POST["x_status"];
        $invoiceId =$txid;
        $transactionId = $endToEndId;
        $paymentAmount = $valor;
        $paymentFee = $tarifa;
        //$hash = $_POST["x_hash"];
        
        //$transactionStatus = 'Success';
         
        
        addInvoicePayment(
                $invoiceId,
                $transactionId,
                $paymentAmount,
                $paymentFee,
                $gatewayModuleName
            );
    

    //}

    resposta(200, "Arquivo Salvo com Sucesso!", $dados);
}

function requisicao($metodo, $body, $parametros) {
    switch ($metodo) {
        case 'POST':
            salvar($body);
            break;
        case 'GET':
            resposta(200, "Requisição realizada com sucesso!", $body);
            break;
    }
}

// Obtém o método HTTP, body e parâmetros da requisição
$metodo = $_SERVER['REQUEST_METHOD'];
$parametros = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$body = json_decode(file_get_contents('php://input'), true);




//print_r($body);exit;

try {
    requisicao($metodo, $body, $parametros);
} catch (Exception $e) {
    resposta(400, $e->getMessage(), $e);
}

    
