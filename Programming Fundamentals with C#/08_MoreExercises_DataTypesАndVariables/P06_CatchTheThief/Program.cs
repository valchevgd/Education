using System;

namespace P06_CatchTheThief
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

            Console.WriteLine(thiefsId);
        }
    }
}
