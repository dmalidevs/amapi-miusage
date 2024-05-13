import './global';
import { ajax_request, inline_message } from '../lib';


const amapiRefreshButton = document.getElementById('amapi_refresh_button');
const amapiPageContent = document.getElementById('amapi-page-content');
const ajaxLoader = document.getElementById('ajax_loader');

document.addEventListener('DOMContentLoaded', async () => {

	if (amapiPageContent) {
		amapiRefreshButton && amapiRefreshButton.addEventListener('click', async () => {
			handleRequestingData(amapiPageContent);
		});
	}

});

function handleRequestingData(amapiContent) {
	ajaxLoader.style.display = 'block';
	ajax_request('amapi_refresh_data', { name: 'John Doe' })
		.then(response => {

			if (response.success) {
				amapiContent.innerHTML = resposeTableHtml(response.data);
			}

			inline_message(response.success, response.data.message);

			ajaxLoader.style.display = 'none';
		});
}


const resposeTableHtml = (data) => {
	let theadData = `<tr>${data.data.headers.map(header => `<th>${header}</th>`).join('')}</tr>`;
	let tbodyData = Object.keys(data.data.rows).map(key => {
		let row = data.data.rows[key];
		return `<tr><td>${row.id}</td><td>${row.fname}</td><td>${row.lname}</td><td>${row.email}</td><td>${row.date}</td></tr>`;
	}).join('');

	return `<table class="wp-list-table widefat fixed striped table-view-list datas amapi-datatable"><caption>${data.title}</caption><thead>${theadData}</thead><tbody>${tbodyData}</tbody></table>`;
}


function ajax_refresh_table_data(amapiContent) {
	// loading_image(amapiContent);
	ajax_request('amapi_refresh_data', { name: 'John Doe' })
		.then(response => {
			if (response.success) {
				amapiContent.innerHTML = resposeTableHtml(JSON.parse(response.data));
				return;
				// amapiPageContent.removeAttribute('ajax_call');
			}
			inline_message('error', response.data.message, 3000);
			return;

		});
}
