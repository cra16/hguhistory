<!--hyunhee-->
<load target="css/hiswiki.css" />

<div>
  <div>
		<div class="floatLeft">
			{@
				$oHiswikiAdminModel = &getAdminModel('hiswiki');
				$category_view = $oHiswikiAdminModel->getCategoryTable('category');
			}
				{$category_view}
		</div>
		<div class="floatLeft">
			{@
				$oHiswikiAdminModel = &getAdminModel('hiswiki');
				$main_view = $oHiswikiadminModel->getMainTable('대문');
			}
				{$main_view}
		</div>
			<div class="floatLeft">
					{@
						$oHiswikiAdminModel = &getAdminModel('hiswiki');
						$newest_update = $oHiswikiAdminModel->getTable('최신업데이트');
					}
						{$newest_update}
			</div>
			<div class="floatLeft">
					{@
						$oHiswikiAdminModel = &getAdminModel('hiswiki');
						$most_hit = $oHiswikiAdminModel->getTable('조회수');
					}
						{$most_hit}
			</div>
			<div class="floatLeft">
					{@
						$oHiswikiAdminModel = &getAdminModel('hiswiki');
						$request_list = $oHiswikiAdminModel->getTable('요청리스트');
					}
						{$request_list}
			</div>
			<div class="floatLeft">
					{@
						$oHiswikiAdminModel = &getAdminModel('hiswiki');
						$favorite_page = $oHiswikiAdminModel->getTable('총학권한_관심글');
					}
						{$favorite_page}
			</div>
	</div>
</div>