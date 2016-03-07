using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(SocketLeague.Startup))]
namespace SocketLeague
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
