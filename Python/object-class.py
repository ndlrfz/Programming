# class LinuxDistro
# object Debian, RedHat, Arch Linux, OpenSUSE
# attributes: package based (DEB, RPM, xz file), born years, popularity
#


class LinuxDistro:
    def __init__(self, name, pkg, born, rank):
        self.name = name
        self.pkg = pkg
        self.born = born
        self.rank = rank

    def info(self):
        print(
            "My Linux Distribution is",
            self.name,
            "with the default package manager",
            self.pkg,
            ".",
            self.name,
            "born in",
            self.born,
            "and now rank",
            self.rank,
            "on Distrowatch.",
        )


distro = input("What is your Linux distro name:: ")
pkgm = input("What is the package manager you're using:: ")
out = input("In which year your distro born:: ")
crank = input("What the current rank in Distrowatch:: ")

dname = LinuxDistro(distro, pkgm, out, crank)
dname.info()
