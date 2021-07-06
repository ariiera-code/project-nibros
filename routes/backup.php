Route::get('/dataku', function(){
  $data = [
    ['nama_mahasiswa' => 'Nibros Ari W.', 'alamat' => 'Klaten', 'nim' => '33419218', 'semester' => '4', 'tahun_ajaran' => '2020/2021'],
    ['nama_mahasiswa' => 'Tegar Mahardika W.', 'alamat' => 'Cilacap', 'nim' => '33419223', 'semester' => '4', 'tahun_ajaran' => '2020/2021'],
    ['nama_mahasiswa' => 'Gaudentio Shandie M.', 'alamat' => 'Ungaran', 'nim' => '33419211', 'semester' => '4', 'tahun_ajaran' => '2020/2021'],
  ];
  array_multisort(array_map(function($element) {
      return $element['nim'];
  }, $data), SORT_ASC, $data);
  
  return view('v_dataku', ['data' => $data]);
});
