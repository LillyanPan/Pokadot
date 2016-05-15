// Source: http://paperjs.org/tutorials/ !
var count = 20;
	var colors = ["#FC0D1B", "#F6D16C", "#9CC283", "#4471BC"];
	var direction = [1, -1];
	var rand = Math.floor(Math.random() * colors.length);
	var path = new Path.Circle({
		center: [0, 0],
		radius: 5,
		fillColor: colors[rand],
		strokeColor: colors[rand]
	});
	path.sendToBack();

	var symbol = new Symbol(path);

	for (var i = 0; i < count; i++) {
		// The center position is a random point in the view:
		var center = Point.random() * view.size;
		var placedSymbol = symbol.place(center);
		placedSymbol.scale(i / count);
	}

	function onFrame(event) {
		// Run through the active layer's children list and change
		// the position of the placed symbols:
		for (var i = 0; i < count; i++) {
			var item = project.activeLayer.children[i];
			if (i % 2 == 0) {
				
				// Move the item to the right. This way
				// larger circles move faster than smaller circles:
				item.position.x += item.bounds.width / 240;
				item.position.y += item.bounds.height / 160;

				// If the item move off screen, move it back
				if (item.bounds.left > view.size.width) {
					item.position.x = -item.bounds.width * Math.random();
				}
				if (item.bounds.top > view.size.height) {
					item.position.y = -item.bounds.height * Math.random();
				}
			}

			else {
				item.position.x -= item.bounds.width / 120;
				item.position.y -= item.bounds.height / 280;

				// If the item move off screen, move it back
				if (item.bounds.left < 0) {
					item.position.x = view.bounds.width;
				}
				if (item.bounds.top < 0) {
					item.position.y = view.bounds.height;
				}
			}
		}
	}