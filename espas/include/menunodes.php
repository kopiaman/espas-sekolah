<?php
	// create menu nodes arr
	$menuNodesObject->menuNodes = array();
		
	if(!$menuNodesObject->isAdminTable()){
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "HOME";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "HOME";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "MURID";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "MURID";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "Senarai Aktif";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28Status~equals~Aktif%29";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Senarai Aktif";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Alumni List";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Senarai Alumni";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "Senarai Berhenti";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28Status~equals~Berhenti%29";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Senarai Berhenti";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "Disiplin";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Discipline";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Disiplin";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = "Waris";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Report_Family";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Waris";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "8";
		$menuNode["name"] = "GRAF Bilangan Murid";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Chart_no_student";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Chart";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "GRAF Bilangan Murid";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "9";
		$menuNode["name"] = "STAF";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "STAF";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "10";
		$menuNode["name"] = "Senarai Aktif";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "staff_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28sstatus~equals~Aktif%29";
		$menuNode["parent"] = "9";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Senarai Aktif";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "11";
		$menuNode["name"] = "Senarai Tidak Aktif";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "staff_info";
		$menuNode["style"] = "";
		$menuNode["params"] = "q=%28sstatus~notequal~Aktif%29";
		$menuNode["parent"] = "9";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Senarai Tidak Aktif";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "12";
		$menuNode["name"] = "KEDATANGAN";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "KEDATANGAN";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "13";
		$menuNode["name"] = "KEDATANGAN MURID";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "12";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "KEDATANGAN MURID";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "14";
		$menuNode["name"] = "Bina Bulan Kedatangan";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "attend_creator";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "13";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Bina Bulan Kedatangan";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "15";
		$menuNode["name"] = "Ketidakhadiran Murid";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_attendance";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "13";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Ketidakhadiran Murid";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "16";
		$menuNode["name"] = "KEDATANGAN STAF";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "12";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "KEDATANGAN STAF";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "17";
		$menuNode["name"] = "Ketidakhadiran";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "staff_absent_late";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "16";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Ketidakhadiran";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "18";
		$menuNode["name"] = "Kelewatan";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "staff_late";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "16";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Kelewatan";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "19";
		$menuNode["name"] = "Cuti Staf";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "staff_move";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "16";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Cuti Staf";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "20";
		$menuNode["name"] = "RITEN";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "create_pbsra";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "RITEN";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "21";
		$menuNode["name"] = "YURAN";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "YURAN";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "22";
		$menuNode["name"] = "SET- Item Yuran";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "bill_item";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "21";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "SET- Item Yuran";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "23";
		$menuNode["name"] = "SET- Caj Yuran";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "bill_record";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "21";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "SET- Caj Yuran";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "24";
		$menuNode["name"] = "Rekod Yuran ";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "student_billing";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "21";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Rekod Yuran ";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "25";
		$menuNode["name"] = "Laporan Yuran Terkumpul Murid";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "billing_collection_permurid";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "21";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Laporan Yuran Terkumpul Murid";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "26";
		$menuNode["name"] = "WEBSITE";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "WEBSITE";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "27";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_slider";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "26";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Slider";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "28";
		$menuNode["name"] = "Profil ";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_about";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "26";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Profil ";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "29";
		$menuNode["name"] = "Galeri";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_gallery_sub";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "26";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Galeri";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "30";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "w_news";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "26";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Berita";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "31";
		$menuNode["name"] = "SETTING";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "SETTING";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "32";
		$menuNode["name"] = "Pengguna Sistem";
		$menuNode["href"] = "admin_members_list.php";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "31";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Pengguna Sistem";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "33";
		$menuNode["name"] = "Konfigurasi Sekolah";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "campus_setting";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "31";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Konfigurasi Sekolah";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "34";
		$menuNode["name"] = "Senarai Subjek";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "course";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "31";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Senarai Subjek";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "35";
		$menuNode["name"] = "Senarai Pekerjaan";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "job";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "31";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Senarai Pekerjaan";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "36";
		$menuNode["name"] = "Bilangan Bilik Sekolah";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "setting_no_room";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "31";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Bilangan Bilik Sekolah";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "37";
		$menuNode["name"] = "Nama Kelas";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "group";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "31";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Nama Kelas";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "38";
		$menuNode["name"] = "Label";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "set_setting_category";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "31";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Label";
		$menuNodesObject->menuNodes[] = $menuNode;
			if($menuNodesObject->pageType == PAGE_MENU && IsAdmin())
		{
					$menuNode = array();
			$menuNode["id"] = "AAS";
			$menuNode["name"] = "-------";
			$menuNode["href"] = "";
			$menuNode["type"] = "Separator";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "-------";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "None";
			$menuNode["pageType"] = "";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
			//Admin area Link
			$menuNode = array();
			$menuNode["id"] = "AA";
			$menuNode["name"] = "Admin Area";
			$menuNode["href"] = "admin_rights_list.php";
			$menuNode["type"] = "Leaf";
			$menuNode["table"] = "";
			$menuNode["style"] = "";
			$menuNode["title"] = "Admin Area";
			$menuNode["params"] = "";
			$menuNode["parent"] = "0";
			$menuNode["nameType"] = "Text";
			$menuNode["linkType"] = "External";
			$menuNode["pageType"] = "AdminArea";
			$menuNode["openType"] = "None";	
			$menuNodesObject->menuNodes[] = $menuNode;
		}
	}else{
		//Admin Area menu items
		// admin_rights item
		$menuNode = array();
		$menuNode["id"] = "admin_rights";
		$menuNode["name"] = "admin_rights";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_rights";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Permissions";
		$menuNode["href"] = "admin_rights_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_members item
		$menuNode = array();
		$menuNode["id"] = "admin_members";
		$menuNode["name"] = "admin_members";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_members";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Assign users to groups";
		$menuNode["href"] = "admin_members_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
		// admin_users item
		$menuNode = array();
		$menuNode["id"] = "admin_users";
		$menuNode["name"] = "admin_users";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "admin_users";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "External";
		$menuNode["pageType"] = "AdminArea";
		$menuNode["openType"] = "None";	
				$menuNode["title"] = "Add/Edit users";
		$menuNode["href"] = "admin_users_list.php";
		$menuNodesObject->menuNodes[] = $menuNode;
	}	
	
?>
