const TOKEN_ID = "php506_token"; // 원래는 암호와 되어있는 문자열

const getToken = () => {
	return window.localStorage.getItem(TOKEN_ID);
};

const setToken = token => {
	window.localStorage.setItem(TOKEN_ID, token);
	return true;
};

const destroyToken = () => {
	window.localStorage.removeItem(TOKEN_ID);
	return true;
};

export default {
	getToken,
	setToken,
	destroyToken
};