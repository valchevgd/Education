using System;

namespace P06_DNASequences
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());
            int counter = 0;

            for (int i = 1; i <= 4; i++)
            {
                for (int j = 1; j <= 4; j++)
                {
                    for (int l = 1; l <= 4; l++)
                    {
                        if ((i + j + l) < num)
                        {
                            Console.Write("X");
                            switch (i)
                            {
                                case 1:
                                    Console.Write("A");
                                    break;
                                case 2:
                                    Console.Write("C");
                                    break;
                                case 3:
                                    Console.Write("G");
                                    break;
                                case 4:
                                    Console.Write("T");
                                    break;
                            }switch (j)
                            {
                                case 1:
                                    Console.Write("A");
                                    break;
                                case 2:
                                    Console.Write("C");
                                    break;
                                case 3:
                                    Console.Write("G");
                                    break;
                                case 4:
                                    Console.Write("T");
                                    break;
                            }switch (l)
                            {
                                case 1:
                                    Console.Write("A");
                                    break;
                                case 2:
                                    Console.Write("C");
                                    break;
                                case 3:
                                    Console.Write("G");
                                    break;
                                case 4:
                                    Console.Write("T");
                                    break;
                            }

                            Console.Write("X ");
                            counter++;

                            if (counter % 4 == 0)
                            {
                                Console.WriteLine();
                            }

                        }
                        else
                        {
                            Console.Write("O");
                            switch (i)
                            {
                                case 1:
                                    Console.Write("A");
                                    break;
                                case 2:
                                    Console.Write("C");
                                    break;
                                case 3:
                                    Console.Write("G");
                                    break;
                                case 4:
                                    Console.Write("T");
                                    break;
                            }
                            switch (j)
                            {
                                case 1:
                                    Console.Write("A");
                                    break;
                                case 2:
                                    Console.Write("C");
                                    break;
                                case 3:
                                    Console.Write("G");
                                    break;
                                case 4:
                                    Console.Write("T");
                                    break;
                            }
                            switch (l)
                            {
                                case 1:
                                    Console.Write("A");
                                    break;
                                case 2:
                                    Console.Write("C");
                                    break;
                                case 3:
                                    Console.Write("G");
                                    break;
                                case 4:
                                    Console.Write("T");
                                    break;
                            }

                            Console.Write("O ");
                            counter++;

                            if (counter % 4 == 0)
                            {
                                Console.WriteLine();
                            }

                        }
                    }
                }
            }
        }
    }
}
