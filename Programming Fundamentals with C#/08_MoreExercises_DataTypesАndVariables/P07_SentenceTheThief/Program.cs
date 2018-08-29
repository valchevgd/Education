using System;

namespace P07_SentenceTheThief
{
    class Program
    {
        static void Main(string[] args)
        {
            string numeralType = Console.ReadLine();
            int Ids = int.Parse(Console.ReadLine());

            long thiefsId = long.MinValue;

            for (int i = 0; i < Ids; i++)
            {
                long nextId = long.Parse(Console.ReadLine());

                if ("sbyte" == numeralType)
                {
                    if (nextId <= sbyte.MaxValue && nextId > thiefsId)
                    {
                        thiefsId = nextId;
                    }
                }
                else if ("int" == numeralType)
                {
                    if (nextId <= int.MaxValue && nextId > thiefsId)
                    {
                        thiefsId = nextId;
                    }
                }
                else if ("long" == numeralType)
                {
                    if (nextId <= long.MaxValue && nextId > thiefsId)
                    {
                        thiefsId = nextId;
                    }
                }
            }

            double conviction = double.MinValue;

            if (thiefsId < 0)
            {
                conviction = thiefsId / -128.0;
            }
            else
            {
                conviction = thiefsId / 127.0;
            }

            if (conviction <= 1)
            {
                Console.WriteLine($"Prisoner with id {thiefsId} is sentenced to {Math.Ceiling(conviction)} year");
            }
            else
            {
                Console.WriteLine($"Prisoner with id {thiefsId} is sentenced to {Math.Ceiling(conviction)} years");
            }
            
        }
    }
}
