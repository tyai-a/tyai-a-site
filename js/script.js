document.addEventListener('DOMContentLoaded', function () {

	/**
	 * ダークモード切り替え
	 */
	const html = document.querySelector('html');
	const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
	const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

	if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
	else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
	else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
	else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');

	/**
	 * 目次生成
	 */
	var contentsList = document.getElementById('toc'); // 目次を追加する先(table of contents)
	var div = document.createElement('div'); // 作成する目次のコンテナ要素

	// .entry-content配下のh2、h3要素を全て取得する
	var matches = document.querySelectorAll('#article-body h2, #article-body h3');

	// 取得した見出しタグ要素の数だけ以下の操作を繰り返す
	matches.forEach(function (value, i) {
		// 見出しタグ要素のidを取得し空の場合は内容をidにする
		var id = value.id;
		if(id === '') {
			id = value.textContent;
			value.id = id;
		}

		// 要素がh2タグの場合
		if(value.tagName === 'H2') {
			var ul = document.createElement('ul');
			var li = document.createElement('li');
			var a = document.createElement('a')

			// 追加する<ul><li><a>タイトル</a></li></ul>を準備する
			a.innerHTML = value.textContent;
			a.href = '#' + value.id;
			a.classList.add("py-1","ps-4","-ms-px","border-s-2","border-transparent","text-sm","text-slate-700","hover:border-slate-400","hover:text-slate-900","dark:text-slate-400","dark:hover:text-slate-300","hs-scrollspy-active:font-medium","hs-scrollspy-active:text-blue-600","dark:hs-scrollspy-active:text-blue-400");
			li.appendChild(a)
			ul.appendChild(li);

			// コンテナ要素である<div>の中に要素を追加する
			div.appendChild(ul);
		}

		// 要素がh3タグの場合
		if(value.tagName === 'H3') {
			var ul = document.createElement('ul');
			var li = document.createElement('li');
			var a = document.createElement('a');

			// コンテナ要素である<div>の中から最後の<li>を取得する。
			var lastUl = div.lastElementChild;
			var lastLi = lastUl.lastElementChild;

			// 追加する<ul><li><a>タイトル</a></li></ul>を準備する
			a.innerHTML = value.textContent;
			a.href = '#' + value.id;
			li.appendChild(a)
			ul.appendChild(li);

			// 最後の<li>の中に要素を追加する
			lastLi.appendChild(ul);
		}
	});

	// 最後に画面にレンダリング
	contentsList.appendChild(div);
});