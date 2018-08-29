using System;
using System.Linq;

namespace P03_CirclesIntersection
{
    class Program
    {
        static void Main(string[] args)
        {
            Circle firstCircle = MakeCircle(Console.ReadLine());
            Circle secondCircle = MakeCircle(Console.ReadLine());

            double distance = Math.Sqrt(Math.Pow(secondCircle.Point.X - firstCircle.Point.Y, 2)
                + Math.Pow(secondCircle.Point.Y - firstCircle.Point.Y, 2));
            double radiusSum = firstCircle.Radius + secondCircle.Radius;

            bool intersect = distance <= radiusSum;

            if (intersect)
            {
                Console.WriteLine("Yes");
            }
            else
            {
                Console.WriteLine("No");
            }
        }

        private static Circle MakeCircle(string input)
        {
            double[] tokens = input
                .Split()
                .Select(double.Parse)
                .ToArray();

            double x = tokens[0];
            double y = tokens[1];
            double radius = tokens[2];

            Point point = new Point(x, y);
            Circle circle = new Circle(point, radius);

            return circle;
        }
    }

    class Point
    {
        public Point(double x, double y)
        {
            this.X = x;
            this.Y = y;
        }

        public double X { get; set; }

        public double Y { get; set; }
    }

    class Circle
    {
        public Circle(Point point, double radius)
        {
            this.Point = point;
            this.Radius = radius;
        }

        public Point Point { get; set; }

        public double Radius { get; set; }
    }
}
