<?php

class Controller_Example extends Controller_Template
{

	public function action_index()
	{

		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Example &raquo; Index';
		$this->template->content = View::forge('example/index', $data);

		$query = \DB::select('email')->from('guestbook');
// 		$query->where('id', 1);
		$res = $query->execute()->as_array();


// 		//設定
		$config = array(
// 				'pagination_url' => 'example/index',
				'uri_segment' => 'p',
				'num_links' => 2,
				'per_page' => 1,
				'total_items' => 6,
				'name' => 'pagination',
				'show_first' => true,
				'show_last' => true,
		);
		Pagination::set_config($config);

	}

	//データ追加
	public function action_add()
	{
		$data["subnav"] = array('add'=> 'active' );
		$this->template->title = 'Example &raquo; Add';
		$this->template->content = View::forge('example/add', $data);

// 		$result = Model_Test01::find('all', array('related' => array('leftjoinHoge')));
// 		var_dump($result);


		//データ登録
		//インスタンス生成
		$mt = Model_Test01::forge();

		//値設定
		$data = array(
				'column_varchar01' => 'かかか',
				'column_int02' => 11,
				'column_varchar02' => 'ききき',
		);
		$mt->set($data);

		//保存
		if(!$mt->save()){
			print "保存失敗";
		}else{
			print "保存成功";
		}

	}

	//データ更新
	public function action_edit()
	{
		$data["subnav"] = array('add'=> 'active' );
		$this->template->title = 'Example &raquo; Add';
		$this->template->content = View::forge('example/add', $data);
		//インスタンス生成
// 		$mt = Model_Test01::forge();

// 	    //値設定
//     	$data = array(
//     			'column_varchar01' => '>>>>>>',
//         		'column_int02' => 12,
//         		'column_varchar02' => 'けいけいけい',
//     );
//     //保存
//     if(!$mt->find('1')->set($data)->save()){
//     	print "保存失敗";
//     }else{
//     	print "保存成功";
//     }
		$result = DB::update('tbl_test01')->set(array(
				'column_varchar01' => 'おおお',
				'column_int02' => 2,
				'column_varchar02' => 'かかか',
		))->where('pk_id', 8)->execute();
	}

	//データ削除
	public function action_del()
	{
		$data["subnav"] = array('add'=> 'active' );
		$this->template->title = 'Example &raquo; Add';
		$this->template->content = View::forge('example/add', $data);
		$result = DB::delete('tbl_test01')->where('pk_id', 7)->execute();
	}
	//● フォームからパラメータの受取りを理解
	public function action_sendtest()
	{
// 		var_dump("＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊");exit;
		$data["subnav"] = array('add'=> 'active' );
		$this->template->title = 'Example &raquo; Add';
		$this->template->content = View::forge('example/add', $data);
		print "■Input::json()<br>\n";
		var_dump(Input::json());

		print "\n<br><br>■Input::xml()<br>\n";
		var_dump(Input::xml());

		print "\n<br><br>■Input::uri()<br>\n";
		var_dump(Input::uri());

		print "\n<br><br>■Input::extension()<br>\n";
		var_dump(Input::extension());

		print "\n<br><br>■Input::ip()<br>\n";
		var_dump(Input::ip());

		print "\n<br><br>■Input::real_ip()<br>\n";
		var_dump(Input::real_ip());

		print "\n<br><br>■Input::protocol()<br>\n";
		var_dump(Input::protocol());

		print "\n<br><br>■Input::is_ajax()<br>\n";
		var_dump(Input::is_ajax());

		print "\n<br><br>■Input::referrer()<br>\n";
		var_dump(Input::referrer());

		print "\n<br><br>■Input::method()<br>\n";
		var_dump(Input::method());

		print "\n<br><br>■Input::user_agent()<br>\n";
		var_dump(Input::user_agent());

		print "\n<br><br>■Input::all()<br>\n";
		var_dump(Input::all());

		print "\n<br><br>■Input::get()<br>\n";
		var_dump(Input::get());

		print "\n<br><br>■Input::post()<br>\n";
		var_dump(Input::post());

		print "\n<br><br>■Input::put()<br>\n";
		var_dump(Input::put());

		print "\n<br><br>■Input::delete()<br>\n";
		var_dump(Input::delete());

		print "\n<br><br>■Input::file()<br>\n";
		var_dump(Input::file());

		print "\n<br><br>■Input::param()<br>\n";
		var_dump(Input::param());

		print "\n<br><br>■Input::cookie()<br>\n";
		var_dump(Input::cookie());

		print "\n<br><br>■Input::server()<br>\n";
		var_dump(Input::server());
	}

	public function action_sendtest01()
	{
		$data["subnav"] = array('add'=> 'active' );
		$this->template->title = 'Example &raquo; Add';
		$this->template->content = View::forge('example/add', $data);
		$p_get = Input::get();
		$p_post = Input::post();
		$p_file = Input::file();
		$p_param = Input::param();
		var_dump($p_get);
		var_dump($p_post);
		var_dump($p_file);
		var_dump($p_param);
	}

}
