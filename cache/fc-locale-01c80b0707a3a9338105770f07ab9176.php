<?php return array (
  'emails.manualPaymentNotification.subject' => ' Pemberitahuan Pembayaran Manual ',
  'emails.manualPaymentNotification.body' => ' Pembayaran manual harus diproses untuk jurnal dan {$contextName} pengguna {$userFullName} (nama pengguna &quot;{$userName}&quot;).<br />
The item being paid for &quot;{$itemName}&quot;. <br />
Biaya adalah {$itemCost} ({$itemCurrencyCode}). <br />
Surat elektronik ini dibuat oleh plugin pembayaran manual IOJS.',
  'emails.manualPaymentNotification.description' => ' Email ini digunakan untuk memberitahukan kontak manajer jurnal bahwa pembayaran manual dibutuhkan.',
);