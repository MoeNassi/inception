import turtle

a = turtle.Turtle()
screen = turtle.Screen()
screen.bgcolor('black')
col = ('white', 'orange', 'red', 'yellow', 'green', 'blue', 'cyan')
a.speed(0)

for idx in range (50) :
	a.color(col[idx % 7])
	a.forward(idx * 4)
	a.right(91)
	for idx_ in range(3) :
		a.forward(idx_ * 4)
		a.right(91)
		for id_ in range(2) :
			a.forward(id_ * 4)
			a.right(91)
