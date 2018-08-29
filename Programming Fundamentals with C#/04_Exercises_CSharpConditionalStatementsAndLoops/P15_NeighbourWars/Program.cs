using System;

namespace P15_NeighbourWars
{
    class Program
    {
        static void Main(string[] args)
        {
            int peshosDamage = int.Parse(Console.ReadLine());
            int goshosDamage = int.Parse(Console.ReadLine());

            int peshosHealth = 100;
            int goshosHealth = 100;
            int rounds = 0;

            while (true)
            {
                rounds++;

                if (rounds % 2 != 0)
                {
                    goshosHealth -= peshosDamage;

                    if (goshosHealth <= 0)
                    {
                        Console.WriteLine($"Pesho won in {rounds}th round.");
                        return;
                    }
                    else
                    {
                        Console.WriteLine($"Pesho used Roundhouse kick and reduced Gosho to {goshosHealth} health.");
                    }
                    
                }
                else
                {
                    peshosHealth -= goshosDamage;

                    if (peshosHealth <= 0)
                    {
                        Console.WriteLine($"Gosho won in {rounds}th round.");
                        return;
                    }
                    else
                    {
                        Console.WriteLine($"Gosho used Thunderous fist and reduced Pesho to {peshosHealth} health.");
                    }
                }

                if (rounds % 3 == 0)
                {
                    peshosHealth += 10;
                    goshosHealth += 10;
                }
            }
        }
    }
}
