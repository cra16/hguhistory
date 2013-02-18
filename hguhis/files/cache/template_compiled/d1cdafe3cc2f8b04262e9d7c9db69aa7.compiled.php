<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','header.html') ?>
<!-- 현희 -->
<style type="text/css">
.ResultDiv {
	padding: 1px 15px 19px 15px;
	border: rgb(201, 201, 201) dotted 1px;
}
.ResultHeading {
	font-size: 13pt;
	margin: 13px 11px 12px 2px;
}
.fontPt {
	margin: 0 0 0 8px;
	font-size: 10pt;
}
.outerDiv .ResultViewDiv {
	margin: 2px 5px 4px 5px;
	padding: 11px 21px 19px 21px;
	font-weight: inherit;
	font-size: 100%;
	font-family: 돋움, dotum, sans-serif;
	vertical-align: baseline;
	background-image:
		url("<?php echo geturl() ?>modules/hiswiki/skins/default/img/ecailles.png");
	border: 1px dotted rgb(202, 202, 202);
}
.ResultViewDiv:hover {
	background-image:
		url("<?php echo geturl() ?>modules/hiswiki/skins/default/img/pw_maze_white.png");
	cursor: pointer;
}
.documentLink {
	text-decoration: none;
}
.hwTitle {
	font-size: 12pt;
	font-style: bold;
	margin: 9px 6px 5px 0px;
}
.hwContent {
	font-size: 11pt;
	padding-bottom: 4px;
}
.updateInfo {
	font-size: 9pt;
	color: #808080;
	padding: 1px 0 0 1px;
}
a:link {
	text-decoration: none;
	color: black;
}
a:visited {
	color: rgb(73, 73, 73);
}
a:hover {
	color: #A9A9A9;
}
.addBtn {
	margin: 7px 5px -4px 6px;
}
</style>
<div class="outerDiv">
	<div class="ResultDiv">
		<h3 class="ResultHeading">
			표제어 검색 결과<a
				href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'title') ?>"
				class="btn fontPt" id="buttonTitle">더보기</a>
		</h3>
		<div id="msg1">
			<?php if($__Context->search_results_title&&count($__Context->search_results_title))foreach($__Context->search_results_title as $__Context->val){ ?><div class="ResultViewDiv">
				<?php $__Context->oDocumentModel=&getModel('document') ?>
				<?php $__Context->extra_vars=$__Context->oDocumentModel->getExtravars($__Context->val->module_srl,$__Context->val->document_srl) ?>
				<h3 class="hwTitle">
					<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getTitle() ?></a>
				</h3>
				<div class="hwContent">
					<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>"><?php echo $__Context->val->getSummary() ?></a>
				</div>
				<div class="updateInfo">
					<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span> <span
						class="nickName member_<?php echo $__Context->val->get('member_srl') ?>">| 책임자
						<?php echo $__Context->extra_vars[3]->value ?></span> <span class="readCount">| 조회수
						<?php echo $__Context->val->get('readed_count') ?></span> <span class="tag">| 태그
						<?php echo $__Context->val->get('tags') ?></span>
				</div>
			</div><?php } ?>
		</div>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading">
			내용 검색 결과<a
				href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'content') ?>"
				class="btn fontPt" id="buttonContent">더보기</a>
		</h3>
		<div id="msg2">
			<?php if($__Context->search_results_content&&count($__Context->search_results_content))foreach($__Context->search_results_content as $__Context->val){ ?><div class="ResultViewDiv">
				<?php $__Context->oDocumentModel=&getModel('document') ?>
				<?php $__Context->extra_vars=$__Context->oDocumentModel->getExtravars($__Context->val->module_srl,$__Context->val->document_srl) ?>
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>">
					<h3 class="hwTitle"><?php echo $__Context->val->getTitle() ?></h3>
					<div class="hwContent"><?php echo $__Context->val->getSummary() ?></div>
					<div class="updateInfo">
						<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span> <span
							class="nickName">| 책임자 <?php echo $__Context->extra_vars[3]->value ?></span> <span
							class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> <span
							class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
					</div>
				</a>
			</div><?php } ?>
		</div>
	</div>
	<div class="ResultDiv">
		<h3 class="ResultHeading">
			태그 검색 결과<a
				href="<?php echo getUrl('act', 'dispHiswikiContentList', 'search_keyword', $__Context->search_keyword, 'search_target', 'tag') ?>"
				class="btn fontPt" id="buttonTag">더보기</a>
		</h3>
		<div id="msg3">
			<?php if($__Context->search_results_tags&&count($__Context->search_results_tags))foreach($__Context->search_results_tags as $__Context->val){ ?><div class="ResultViewDiv">
				<?php $__Context->oDocumentModel=&getModel('document') ?>
				<?php $__Context->extra_vars=$__Context->oDocumentModel->getExtravars($__Context->val->module_srl,$__Context->val->document_srl) ?>
				<a class="documentLink" href="<?php echo $__Context->val->getPermanentUrl() ?>">
					<h3 class="hwTitle"><?php echo $__Context->val->getTitle() ?></h3>
					<div class="hwContent"><?php echo $__Context->val->getSummary() ?></div>
					<div class="updateInfo">
						<span class="regdate">작성일 <?php echo $__Context->val->getRegdate('Y.m.d') ?></span> <span
							class="nickName">| 책임자 <?php echo $__Context->extra_vars[3]->value ?></span> <span
							class="readCount">| 조회수 <?php echo $__Context->val->get('readed_count') ?></span> <span
							class="tag">| 태그 <?php echo $__Context->val->get('tags') ?></span>
					</div>
				</a>
			</div><?php } ?>
		</div>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/hiswiki/skins/default','footer.html') ?>
<script type="text/javascript">
	jQuery(function($) {
		/**
		 * @function createElement
		 * @author 바람꽃(wndflwr@gmail.com)
		 * @param tag : string : DOM 객체의 태그 이름. 비어있을 경우 빈 div 엘리먼트를 리턴한다.
		 * @param options : object : DOM 객체의 여러가지 옵션들을 지정한다.
		 * @param options.id : string : DOM 객체의 id
		 * @param options.cls : [string | array] : DOM 객체의 class를 설정할 수 있다. 여러개의 class를 가지고 있다면 array로 넘기면 됨.
		 * @param options.text : string : DOM 객체의 text
		 * @param options.attr : object : DOM 객체의 속성을 지정할 수 있다.
		 * @param options.css : object : DOM 객체의 style을 지정할 수 있다.
		 * @returns jQuery DOM object
		 */
		function createElement(tag, options) {
			if (!tag)
				return $('<div />');
			var $elem = $('<' + tag + '/>');
			if (options) {
				if (options.id)
					$elem.attr('id', options.id);
				if (options.cls) {
					if (typeof options.cls == 'null'
							|| typeof options.cls == 'undefined') {
						// do nothing
					} else if (typeof options.cls == 'string') {
						$elem.addClass(options.cls);
					} else if (typeof options.cls == 'object') {
						for ( var i in options.cls) {
							$elem.addClass(options.cls[i]);
						}
					}
				}
				if (options.text)
					$elem.text(options.text);
				if (typeof options.attr != 'null'
						&& typeof options.attr == 'object') {
					for ( var i in options.attr) {
						$elem.attr(i, options.attr[i]);
					}
				}
				if (typeof options.css != 'null'
						&& typeof options.css == 'object') {
					for ( var i in options.css) {
						$elem.css(i, options.css[i]);
					}
				}
			}
			return $elem;
		}
		$(document).ready(function() {
			var tmp1 = '<?php echo $__Context->msg_no_result_title ?>';
			var tmp2 = '<?php echo $__Context->msg_no_result_content ?>';
			var tmp3 = '<?php echo $__Context->msg_no_result_tag ?>';
			console.log(tmp1);
			console.log(tmp2);
			console.log(tmp3);
			if (tmp1) {
				$('#buttonTitle').hide();
				$('#msg1').append(createElement('div', {
					cls : 'msg_no_result',
					text : tmp1
				}));
			}
			if (tmp2) {
				$('#buttonContent').hide();
				$('#msg2').append(createElement('div', {
					cls : 'msg_no_result',
					text : tmp2
				}));
			}
			if (tmp3) {
				$('#buttonTag').hide();
				$('#msg3').append(createElement('div', {
					cls : 'msg_no_result',
					text : tmp3
				}));
			}
		});
	});
</script>