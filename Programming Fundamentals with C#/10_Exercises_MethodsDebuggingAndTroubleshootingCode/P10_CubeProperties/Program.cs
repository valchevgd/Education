using System;

namespace P10_CubeProperties
{
    class Program
    {
        static void Main(string[] args)
        {
            double side = double.Parse(Console.ReadLine());
            string parameter = Console.ReadLine();
            double result = 0;

            if ("face" == parameter)
            {
                result = GetFaceOfCube(side);
            }
            else if ("space" == parameter)
            {
                result = GetSpaceOfCube(side);
            }
            else if ("volume" == parameter)
            {
                result = GetVolumeOfCube(side);
            }
            else if ("area" == parameter)
            {
                result = GetAreaOfCube(side);
            }

            Console.WriteLine($"{result:f2}");
        }

        private static double GetAreaOfCube(double side)
        {
            double area = Math.Pow(side, 2) * 6;
            return area;
        }

        private static double GetSpaceOfCube(double side)
        {
            double space = Math.Sqrt((Math.Pow(side, 2)) * 3);
            return space;
        }

        private static double GetVolumeOfCube(double side)
        {
            double volume = Math.Pow(side, 3);
            return volume;
        }

        private static double GetFaceOfCube(double side)
        {
            double face = Math.Sqrt(Math.Pow(side, 2) + Math.Pow(side, 2));
            return face;
        }
    }
}
