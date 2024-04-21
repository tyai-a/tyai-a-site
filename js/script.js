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
	const tocElementClassName = ["inline-block","py-1","-ms-px","border-s-2","border-transparent","text-sm","text-slate-700","hover:border-slate-400","hover:text-slate-900","dark:text-slate-400","dark:hover:text-slate-300","hs-scrollspy-active:font-medium","hs-scrollspy-active:text-blue-600","dark:hs-scrollspy-active:text-blue-400"];
	const tocIndent = {
		"h2": "ps-4",
		"h3": "ps-6",
		"h4": "ps-8",
		"h5": "ps-10",
		"h6": "ps-12",
	}

	const contentsList = document.getElementById('toc');
	const matches = document.querySelectorAll('#article-body h2, #article-body h3, #article-body h4, #article-body h5, #article-body h6');

	// 取得した見出しタグ要素の数だけ以下の操作を繰り返す
	matches.forEach(function (value, i) {
		var id = value.id;
		if(id === '') {
			id = value.textContent;
			value.id = id;
		}

		const generator = (indent) => {
			var ul = document.createElement('ul');
			var li = document.createElement('li');
			var a = document.createElement('a')

			a.innerHTML = value.textContent;
			a.href = '#' + value.id;
			a.classList.add(...tocElementClassName);
			a.classList.add(indent)
			if(i === 0){
				a.classList.add("active");
			}
			li.appendChild(a)
			contentsList.appendChild(li);
		}

		if(value.tagName === 'H2') generator(tocIndent.h2)
		if(value.tagName === 'H3') generator(tocIndent.h3)
		if(value.tagName === 'H4') generator(tocIndent.h4)
		if(value.tagName === 'H5') generator(tocIndent.h5)
		if(value.tagName === 'H6') generator(tocIndent.h6)

	});

});