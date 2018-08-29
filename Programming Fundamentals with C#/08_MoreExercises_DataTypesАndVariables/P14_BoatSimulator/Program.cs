using System;

namespace P14_BoatSimulator
{
    class Program
    {
        static void Main(string[] args)
        {
            char firstBoat = char.Parse(Console.ReadLine());
            char secondBoat = char.Parse(Console.ReadLine());
            int num = int.Parse(Console.ReadLine());

            int firstBoatMoves = 0;
            int secondBoatMoves = 0;

            for (int i = 1; i <= num ; i++)
            {
                string nextString = Console.ReadLine();

                if (nextString == "UPGRADE")
                {
                    int newFirstBoat = firstBoat + 3;
                    firstBoat = (char)newFirstBoat;
                    int newSecondBoat = secondBoat + 3;
                    secondBoat = (char)newSecondBoat;
                }
                else
                {
                    if (i % 2 != 0)
                    {
                        firstBoatMoves += nextString.Length;

                        if (firstBoatMoves >= 50)
                        {
                            Console.WriteLine(firstBoat);
                            return;
                        }
                    }
                    else
                    {
                        secondBoatMoves += nextString.Length;

                        if (secondBoatMoves >= 50)
                        {
                            Console.WriteLine(secondBoat);
                            return;
                        }
                    }
                }
            }

            if (firstBoatMoves > secondBoatMoves)
            {
                Console.WriteLine(firstBoat);
            }
            else
            {
                Console.WriteLine(secondBoat);
            }
        }
    }
}
