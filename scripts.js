function load_tasks() {
	document.getElementById("tasklist").innerHTML = "";
	fetch("load.php", {
		method: "get",
	})
		.then(function (response) {
			if (response.status >= 200 && response.status < 300) {
				return response.text();
			}
			throw new Error(response.statusText);
		})
		.then(function (response) {
			var container = document.createElement("section");
			document.getElementById("tasklist").appendChild(container);
			container.innerHTML = response;
			container.className = "tasks";
		});
}
function add_entry(data) {
	fetch("insert.php?task=" + data, {
		method: "get",
	})
		.then(function (response) {
			if (response.status >= 200 && response.status < 300) {
				return response.text();
			}
			throw new Error(response.statusText);
		})
		.then(function (response) {
			console.log(response);
			load_tasks();
			new_todo.value = "";
		});
}
function delete_entry(data, rowId) {
	rowId.classList.add("deleted");
	setTimeout(() => {
		fetch("delete.php?id=" + data, {
			method: "get",
		})
			.then(function (response) {
				if (response.status >= 200 && response.status < 300) {
					return response.text();
				}
				throw new Error(response.statusText);
			})
			.then(function (response) {
				console.log(response);
				rowId.style.display = "none";
			});
	}, 3000);
}
