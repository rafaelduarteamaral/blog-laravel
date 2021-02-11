<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<form action="http://www.webdanfe.com.br/danfe/GeraDanfe.php" name="one" enctype="multipart/form-data" method="post">
<input type="submit" value="enviar">

<textarea name="arquivoXml" cols="150" rows="50" style="visibility:hidden" >
<?xml version="1.0" encoding="UTF-8"?>
<procEventoNFe versao="1.0">
	<evento xmlns="http://www.portalfiscal.inf.br/nfe" versao="1.00">
		<infEvento Id="ID1101103520123028344900017555001000010850169724158101">
			<cOrgao>
				35
			</cOrgao>
			<tpAmb>
				1
			</tpAmb>
			<CNPJ>
				30283449000175
			</CNPJ>
			<chNFe>
				35201230283449000175550010000108501697241581
			</chNFe>
			<dhEvento>
				2020-12-23T11:20:53-03:00
			</dhEvento>
			<tpEvento>
				110110
			</tpEvento>
			<nSeqEvento>
				1
			</nSeqEvento>
			<verEvento>
				1.00
			</verEvento>
			<detEvento versao="1.00">
				<descEvento>
					Carta de Correcao
				</descEvento>
				<xCorrecao>
					PARA O CAMPO:Considerar correto Pedido: 2760 e vencimento :22/01, 06/02, 21/02.
				</xCorrecao>
				<xCondUso>
					A Carta de Correcao e disciplinada pelo paragrafo 1o-A do art. 7o do Convenio S/N, de 15 de dezembro de 1970 e pode ser utilizada para regularizacao de erro ocorrido na emissao de documento fiscal, desde que o erro nao esteja relacionado com: I - as variaveis que determinam o valor do imposto tais como: base de calculo, aliquota, diferenca de preco, quantidade, valor da operacao ou da prestacao; II - a correcao de dados cadastrais que implique mudanca do remetente ou do destinatario; III - a data de emissao ou de saida.
				</xCondUso>
			</detEvento>
		</infEvento>
		<Signature xmlns="http://www.w3.org/2000/09/xmldsig#">
			<SignedInfo>
				<CanonicalizationMethod Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315" />
				<SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1" />
				<Reference URI="#ID1101103520123028344900017555001000010850169724158101">
					<Transforms>
						<Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature" />
						<Transform Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315" />
					</Transforms>
					<DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1" />
					<DigestValue>
						KJz3mDNwuZGutZ/Xg4wxhNsS7y0=
					</DigestValue>
				</Reference>
			</SignedInfo>
			<SignatureValue>
				cyDKV0F6Yjb7d3YpJoxr3I3sfKFKmgfeTyaLe1EANSiRtupWqpjex5lKutRfab25q+kAmT9EXx15AAh54e4OjiAEWj+KI7GaysEu31hTiHxgxD/H6Q6y5HejvIXWvfAS7xtgNg3Pp/fMnj9BLpK6i2puuByAgiwkMiIbN62LCRvf/RHMjrlikhsOIEN42GLd/oqaOaLM5KeQ6/KdT7LtMhfq6hkuoAblV6dL1YLwezsJWe904XNxsbSb7Rc8dBK4xK0gB61l6SC/R7xwN/qhAec8Nk17Pkg5G5EU2WO9NVaTtLAjQ1pINGltmRwInzZgr8GqQm15qGGR2kjemNo7MQ==
			</SignatureValue>
			<KeyInfo>
				<X509Data>
					<X509Certificate>
						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
					</X509Certificate>
				</X509Data>
			</KeyInfo>
		</Signature>
	</evento>
	<retEvento versao="1.00">
		<infEvento>
			<tpAmb>
				1
			</tpAmb>
			<verAplic>
				SP_EVENTOS_PL_100
			</verAplic>
			<cOrgao>
				35
			</cOrgao>
			<cStat>
				135
			</cStat>
			<xMotivo>
				Evento registrado e vinculado a NF-e
			</xMotivo>
			<chNFe>
				35201230283449000175550010000108501697241581
			</chNFe>
			<tpEvento>
				110110
			</tpEvento>
			<xEvento>
				Carta de Correção registrada
			</xEvento>
			<nSeqEvento>
				1
			</nSeqEvento>
			<CNPJDest>
				00005787000184
			</CNPJDest>
			<dhRegEvento>
				2020-12-23T11:20:53-03:00
			</dhRegEvento>
			<nProt>
				135201219960547
			</nProt>
		</infEvento>
	</retEvento>
</procEventoNFe>


</textarea>

</form>
<script>

// descomente a linha abaixo para o arquivo ser enviado automaticamente para o WebDANFE
document.one.submit();

</script>
</body>
</html>