<?php return array (
  'emails.paypalInvestigatePayment.subject' => ' Kegiatan pembayaran paypal yang tidak biasa ',
  'emails.paypalInvestigatePayment.body' => ' IOJS telah menemukan kegiatan yang tidak biasa yang berhubungan dengan bantuan pembayaran paypal untuk jurnal {$contextName}. Kegiatan ini mungkin dibutuhkan investigasi yang lebih lanjut atau intervensi manual. Emai ini diciptakan oleh OJS PayPal plugin.<br />
Informasi posting penuh untuk permohonan:<br />
{$postInfo}<br />
Informasi tambahan (jika tersedia):<br />
{$additionalInfo}<br />
Variasi Server :<br />
{$serverVars}<br />
',
  'emails.paypalInvestigatePayment.description' => ' Email ini digunakan untuk memberitahukan jurnal kontak utama yang mempunyai kegiatan yang mencurigakan atau kegiatan yang membutuhkan intervensi manual yang ditemukan oleh plugin paypal.',
);